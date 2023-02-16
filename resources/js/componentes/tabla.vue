<template>
    <table>
        <tr>
           <th v-for="campo in campos">
               <button @click="ordena(campo)" class="rounded text-lg bg-gray-200 text-white hover:bg-gray-700 cursor-pointer">{{campo}}</button>
           </th>
        </tr>
        <tr v-for="fila in filas">
            <td v-for="campo in fila">{{campo}}</td>
        </tr>
    </table>
</template>

<script>
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
        }
    }
}
</script>

<style scoped>

</style>
