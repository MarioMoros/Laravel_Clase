import axios from "axios";
<template>
    <table>
        <tr>
           <th v-for="campo in campos">
               <button @click="ordena(campo)" class="rounded text-lg bg-gray-200 text-white hover:bg-gray-700 cursor-pointer">{{campo}}</button>
           </th>
        </tr>
        <tr v-for="fila in filas">
            <td v-for="campo in fila">{{campo}}</td>
            <td><button @click="borrar(fila.id)">Borrar</button></td>
            <td><button @click="editar(fila.id)">Editar</button></td>
        </tr>
    </table>
</template>

<script>
import axios from "axios";

export default {
    name: "tabla",
    props: ["filas_serializado", "campos_serializado", "nombre"],
    data(){
        return{
            filas: [],
            campos: [],
            nombre: "",
        }
    },
    mounted() {
        this.filas = JSON.parse(this.filas_serializado);
        this.campos = JSON.parse(this.campos_serializado);
    },
    methods:{
        ordena: function (campo){
            this.filas = this.filas.sort((a,b)=>{
                if(a[campo]>b[campo]){
                    return 1;
                }else{
                    return -1;
                }
            })
        },
        borrar: function (id){
            var url = window.location.href;
            var self = this;
            axios.delete(url + "/" + id)
                .then((response)=> {
                    self.filas = response.data.alumnos;
                })
                .catch((error)=>
                    alert("Error al hacer delete "+error))
        },
        editar: function (campo){
            var url = window.location.href;
            //axios.get(url + "/" + campo + "/edit");
            window.location.href = url + "/" + campo + "/edit";
        },
    }
}
</script>

<style scoped>

</style>
