<template>
<div>
   <div class="row" >
       <div class="col s12 m12 l12">
           <div class="card ">
               <div class="card-content">
                   <div class="">
                       <button class="float-right waves-effect btn-floating yellow darken-3 tooltipped" data-position="left" data-tooltip="Modificar" @click="openModalForEditRole" >
                           <i class="fal fa-pencil-alt"></i>
                       </button>
                   </div>
                   <h4 class="card-title center">{{role.description}}</h4>
                   <p class="caption mb-0 mr-3 center" >
                       IDENTIFICADOR: {{role.name}}
                   </p>
               </div>
           </div>
       </div>
   </div>
    <div class="row ">
       <div class="col s12 m12 l12">
           <div class="card">
               <div class="card-content">
                   <h4 class="card-title">Permisos</h4>
                   <button class="btn red animated fadeIn">Hola</button>
               </div>
           </div>
       </div>
    </div>


    <!--    modal-->
    <div class="row">
        <div class="col s12">
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h5>Modificar Rol</h5>
                    <div class="row">
                        <div class="input-field col s12 m6" >
                            <input type="text" name="role-description" id="role-description"
                                   v-model="rolePivot.description"
                                   @input="rolePivot.description = $event.target.value.toUpperCase()"
                                   @keyup=""
                                   placeholder="Descripcion">
                            <label for="role-description">Descripcion</label>
                        </div>
                        <div class="input-field col s12 m6" >
                            <input type="text" name="role-name" id="role-name" v-model="rolePivot.name" placeholder="Identificador">
                            <label for="role-name">Identificador</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="modal-action modal-close waves-effect waves-red btn-flat "><i class="material-icons left red-text">clear</i>Cancelar</button>
                    <a class="btn-flat mb-1 waves-effect green darken-1 white-text" @click.prevent="updateRole()" ><i class="material-icons right" >save</i> Guardar</a>
                </div>
            </div>
        </div>
    </div>
    <!--        end-modal-->
</div>
</template>

<script>

    export default {
        name: "RoleUpdateComponent",
        data(){
            return{
                role_name:'',
                role:{
                    id:'',
                    name:'',
                    description:''
                },
                rolePivot:{
                    name:'',
                    description:''
                },
                errors:[]
            }
        },
        created() {
            this.role_name = $('meta[name=role-name]').attr('content');
            this.getRoleToEdit()
        },
        methods:{
            getRoleToEdit(){
                let url= '/api/roles/'+this.role_name
                axios.get(url)
                    .then(response => {
                        this.role = response.data;
                    })
                    .catch(error=>{
                        this.errors =  error.response.data;
                    });
            },
            openModalForEditRole(){
                this.rolePivot.name = this.role.name;
                this.rolePivot.description = this.role.description;
                $('.modal').modal();
                $('#modal1').modal('open');
            },
            updateRole(){
                let url= '/api/roles/'+this.role.id;
                console.log(url);
                axios.put(url,{
                        name:this.rolePivot.name,
                        description:this.rolePivot.description
                    })
                    .then(response => {
                         this.role.name = response.data.data.name;
                         this.role.description = response.data.data.description;
                        $('#modal1').modal('close');
                        swal("Rol Actualizado!", "Se han guardado los cambios!", "success");
                    })
                    .catch(error =>{
                        console.log(error.response.data);
                    })
            }
        }
    }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
        opacity: 0
    }

    .box {
        width:200px;height:200px;
    }
    .yellow{
        background-color:yellow;
    }
    .blue{
        background-color:blue;
    }
</style>
