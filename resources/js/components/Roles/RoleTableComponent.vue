<template>
<div>
    <tr v-for="(role,index) in roles" :key="role.id">
        <td>{{role.id}}</td>
        <td>{{role.description}}</td>
        <td>{{role.name}}</td>
        <td>
            <button  class="btn-flat " @click.prevent="onClickEdit(role.name)">
                <i class="material-icons">settings</i>
            </button>
        </td>
        <td>
            <button  class="btn-flat  red-text" @click="deleteRole(role, index)">
                <i class="material-icons">clear</i>
            </button>
        </td>
    </tr>

</div>
</template>

<script>
    export default {
        name: "RoleTableComponent",
        props:['roles'],
        data(){
            return{
                //roles:[]
            }
        },
        methods:{
            onClickEdit(name){
                this.$emit('onClickEdit')
            }
        }
    }
</script>

<style scoped>

</style>
