<template>
<div>
    <div class="row">
        <div class="col s12" >
            <div class="card ">
                <div class="card-content" >
                    <h4 class="card-title">Roles del Sistema</h4>
                    <div class="row">
                        <div class="col s12 table-scrollable" v-show="roles.length > 0">
                            <table
                                   class="highlight  animated fadeIn">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción</th>
                                    <th>Identificador</th>
                                    <th class="option-btn">Editar</th>
                                    <th class="option-btn">Eliminar</th>
                                </tr>
                                </thead>

                                <transition-group
                                    name="role-list"
                                    leave-active-class="animated bounceOut"
                                    tag="tbody"
                                >
                                    <role-row-table-component
                                        v-for="(role, index) in roles"
                                        :key="role.id"
                                        :role="role"
                                        :index="index"
                                        @redirectToEdit="redirectToEdit(role.name)"
                                        @deleteRole="deleteRole(role, index)"
                                    >
                                    </role-row-table-component>
                                </transition-group>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</template>

<script>
       export default {
        name: "RoleIndexComponent",
        data(){
            return{
                roles:[],
                errors:[]
            }
        },
        created() {
            this.getRoles();
        },
        methods:{
            getRoles(){
                axios.get('/api/roles')
                    .then(response => {
                        this.roles = response.data;
                    })
                    .catch(error => {
                        this.errors = [];
                        this.errors = error.response.data;
                    });
            },
            deleteRole(role,index){
                let url = '/api/roles/'+role.id
                swal({
                    title: "Estas seguro?",
                    text: "Este proceso afectará a los usuarios que esten registrados con este rol!",
                    icon: 'warning',
                    buttons: {
                        cancel: 'Cancelar',
                        delete: 'Si, Eliminar'
                    }
                }).then(value =>{
                    if (value){
                        axios.delete(url)
                            .then(response => {
                                this.roles.splice(index,1)
                            })
                    }
                })

            },
            redirectToEdit(name){
                window.location.href='/roles/'+name+'/editar'
            }
        }
    }
</script>

<style scoped>
    .role-list-move {
        transition: transform 1s;
    }
</style>
