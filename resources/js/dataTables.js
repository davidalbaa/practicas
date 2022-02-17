import $ from "jquery";
import "datatables.net-bs4";


const boton = document.querySelector("#cambiar")

let pagina = 1;

const columns = [
    { data: 'id' },
    { data: 'name' },
];
const dataT = $('#tabla').DataTable({
    columns,
    data: [],
});
async function cargarData(page = 1) {
    const URI = `?page=${page}`;
    const response = await axios.get(`/cursos/data-ajax${URI}`)
    const {
        last_page
    } = response;
    const {
        data
    } = response.data;
    return data;
}

async function cargaInicial() {
    const data = await cargarData();
    dataT.rows.add(data).draw();
}

cargaInicial();

boton.addEventListener("click", async function  () {
    pagina++;
    const data = await cargarData(pagina)
    dataT.rows.add(data).draw();
});