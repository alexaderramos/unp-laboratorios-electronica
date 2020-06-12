<template>
<div>
   <div class="row" >
       <div class="col s12 m12 l12">
           <div class="card ">
               <div class="card-content">
                   <div class="float-right">
                       <button class=" waves-effect btn-floating yellow darken-3 tooltipped" data-position="left" data-tooltip="Modificar" @click="openModalForEditRole" >
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
    <div class="row"  style="height: calc( 80vh )">
       <div class="col s6" :class="isEditing?'m6 l6':''">
           <div class="card">
               <div class="card-content">
                   <div class="float-right">
                       <button  v-if="!isEditing" @click.prevent="changeIsEditing()" class="waves-effect waves-light btn-floating yellow darken-3 tooltipped" data-position="left" data-tooltip="Modificar"><i class="fal fa-pencil-alt"></i></button>
                       <button  v-else @click="isEditing= false" class="waves-effect waves-light btn-floating  green darken-1 tooltipped" data-position="left" data-tooltip="Guardar"><i class="material-icons">save</i></button>

                   </div>
                   <h4 class="card-title mb-0">Permisos </h4>
                   <div class="row">
                       <div class="col s12 table-scrollable">
                           <table class="highlight  animated fadeIn">
                               <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripcion</th>
                                    <th v-if="isEditing">Quitar</th>
                                </tr>
                               </thead>
                               <tbody>
                                <tr v-for="permission in permissionsToEdit" :key="permission.id">
                                    <td>{{permission.id}}</td>
                                    <td>{{permission.description}}</td>
                                    <td v-if="isEditing" ><a class="mb-0 mt-0 btn-flat" ><i class="material-icons pink-text">clear</i></a></td>
                                </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        <div v-if=""  class="col m6 l6" >
            <div class="card">
                <div class="card-content">
                    <div class="float-right">
                        <button  v-if="!isEditing" @click="isEditing = true" class="waves-effect waves-light btn-floating yellow darken-3 tooltipped" data-position="left" data-tooltip="Modificar"><i class="fal fa-pencil-alt"></i></button>
                        <button  v-else @click="isEditing = false" class="waves-effect waves-light btn-floating  green darken-1 tooltipped" data-position="left" data-tooltip="Guardar"><i class="material-icons">save</i></button>

                    </div>
                    <h4 class="card-title mb-0 ">Permisos Asignables  </h4>
                    <div class="row">
                        <div class="col s12 table-scrollable">
                            <table class="highlight  animated fadeIn">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripcion</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(permission, index) in permissions" :key="permission.id">
                                        <td>{{permission.id}}</td>
                                        <td>{{permission.description}}</td>
                                        <td>
                                            <label>
                                                <input
                                                    v-model="permission.checked"
                                                    @click="changeChecked(permission, index)"
                                                    :name="permission.id"
                                                    :id="permission.id"
                                                    :checked="permission.checked"
                                                    type="checkbox"/>
                                                <span></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                                   placeholder="Descripcion" value="tet">
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
                role:{
                    id:'',
                    name:'',
                    description:'',
                    permissions:[],
                },
                permissionsToEdit:[], //permissions para editar
                permissions:[], //permisos para asigar
                rolePivot:{
                    name:'',
                    description:''
                },
                errors:[],
                isEditing:false
            }
        },
        created() {
            this.getRoleToEdit()
        },
        methods:{
            getRoleToEdit(){
                let role_id = $('meta[name=role-id]').attr('content');
                let url= '/api/roles/'+role_id
                axios.get(url)
                    .then(response => {
                        this.role = response.data;
                        //obtenemos una copia del los permisos
                        this.permissionsToEdit = Array.from(this.role.permissions);
                    })
                    .catch(error=>{
                        this.errors =  error.response.data;
                    });
            },
            openModalForEditRole(){
                this.rolePivot.name = this.role.name;
                this.rolePivot.description = this.role.description;
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
            },
            changeIsEditing(){
                if (this.permissions.length === 0){
                    this.getPermissions();
                }
                this.isEditing = true
            },
            getPermissions(){
                axios.get('/api/permissions')
                    .then(response => {
                        let permissions = response.data;
                        this.permissions = this.checkedPermissionsPrev(permissions)
                    })
            },
            checkedPermissionsPrev(permissions){
                permissions.map(p =>{
                    let test = this.permissionsToEdit.find(rp => {
                        return p.id === rp.id;
                    });
                    p.checked = test !== undefined;
                })
                return permissions;
            },
            changeChecked(permission, index){
                //buscamos si se encuentra en los permisos para editar
                let indexP = this.permissionsToEdit.findIndex(p =>permission.id === p.id)
                if (indexP >= 0){
                    this.permissionsToEdit.splice(indexP,1); //lo removemos
                    //verificamos si el eliminado esta el la original
                    let indexOrg = this.role.permissions.findIndex(op => op.id === permission.id )
                    permission.class = indexOrg === -1 ? '':'red-text';
                }else{
                    // this.role.permissions.push(permission) //
                    let indexPrev = this.permissionsToEdit.findIndex(p => p.id > permission.id )
                    let indexOrg = this.role.permissions.findIndex(op => op.id === permission.id ) //buscar si esta en la original
                    console.log(indexOrg);
                    permission.class = indexOrg === -1 ? 'cyan-text':'';  //class for css
                    if(indexPrev >= 0){
                        this.permissionsToEdit.splice(indexPrev,0,permission); //agregar al inicio o al medio
                    }else{
                        this.permissionsToEdit.push(permission) //add to end
                    }

                }
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
