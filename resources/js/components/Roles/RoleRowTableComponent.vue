<template>
    <tr>
        <td>{{role.id}}</td>
        <td>{{role.description}}</td>
        <td>{{role.name}}</td>
        <td class="option-btn">
            <button  class="btn-flat " @click.prevent="redirectToEdit(role.name)">
                <i class="material-icons">settings</i>
            </button>
        </td>
        <td class="option-btn">
            <button  class="btn-flat  red-text" @click="deleteRole(role, index)">
                <i class="material-icons">clear</i>
            </button>
        </td>
    </tr>
</template>

<script>
    export default {
        name: "RoleRowTableComponent",
        props:['role', 'index'],
        methods:{
            redirectToEdit(name){
                this.$emit('redirectToEdit')
            },
            deleteRole(index){
                this.$emit('deleteRole')

            }
        }
    }
</script>

<style scoped>
 /*   td.option-btn {
        width: 10%;
    }*/
</style>
