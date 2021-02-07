<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mt-5" v-if="$gate.isAdminOrAuthor()">
              <div class="col-md-12 mx-auto">
                <div class="card border-0 bg-light mb-3 shadow-sm">
                  <div class="card-header">
                    <h3 class="card-title">Users Table</h3>

                    <div class="card-tools">
                      <!-- <button class="btn btn-success" data-toggle="modal" data-target="#addNew"><i class="fas fa-user-plus"></i> Nuevo Usuario</button>  -->
                      <button class="btn btn-success" @click="newModal"><i class="fas fa-user-plus"></i> Nuevo Usuario</button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                      <tbody>
                      <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Cédula</th>
                        <th class="text-center">Teléfono</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Rol</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Acciones</th>
                      </tr>
                      <tr v-for="user in users.data" :key="user.id">
                        <td v-text="user.id"></td>
                        <td v-text="user.name"></td>
                        <td v-text="user.cedula"></td>
                        <td v-text="user.telefono"></td>
                        <td v-text="user.email"></td>
                        <td >{{ user.type | upText }}</td>
                        <td class="text-center"> {{ user.created_at | myDate }}</td>
                        <td class="text-center">
                            <a href="#" @click="editModal(user)">
                                <i class="fas fa-edit blue"></i>
                            </a> /
                            <a href="#" @click="deleteUser(user.id)">
                                <i class="fas fa-trash red"></i>
                            </a>
                        </td>
                      </tr>

                    </tbody></table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                        <pagination :data="users" @pagination-change-page="getResults"></pagination>
                  </div>
                </div>
                <!-- /.card -->
              </div>
            </div>
        </div>


    <div v-if="!$gate.isAdminOrAuthor()">
        <not-found></not-found>
    </div>


<!-- Modal -->
<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Nuevo Usuario</h5>
        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Acutalizar la información del Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form @submit.prevent="editmode  ? updateUser() : createUser()" >
      <div class="modal-body">
            <div class="form-group">
              <input v-model="form.name" type="text" name="name"
                placeholder="Ingrese su Nombre"
                class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
              <has-error :form="form" field="name"></has-error>
            </div>
            <div class="form-group">
              <input v-model="form.cedula" type="text" name="cedula"
                placeholder="Ingrese su carneet de identidad"
                class="form-control" :class="{ 'is-invalid': form.errors.has('cedula') }">
              <has-error :form="form" field="cedula"></has-error>
            </div>
            <div class="form-group">
              <input v-model="form.telefono" type="text" name="telefono"
                placeholder="Ingrese su número de celular"
                class="form-control" :class="{ 'is-invalid': form.errors.has('telefono') }">
              <has-error :form="form" field="telefono"></has-error>
            </div>
            <div class="form-group">
              <input v-model="form.email" type="email" name="email"
                placeholder="Ingrese su E-mail. (opcional)"
                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
              <has-error :form="form" field="email"></has-error>
            </div>
            <div class="form-group">
              <textarea v-model="form.bio" type="text" name="bio" id="bio"
                placeholder="Alguna descripción (opcional)"
                class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
              <has-error :form="form" field="bio"></has-error>
            </div>
            <div class="form-group">
              <select name="type" v-model="form.type" id="type" class="form-control" :class="{'is-invalid': form.errors.has('type') }">
                  <option value="">Seleccione el rol del Usuario</option>
                  <option value="admin">Admin</option>}
                  <option value="user">Standard User</option>}
                  <option value="author">Author</option>}
              </select>
              <has-error :form="form" field="type"></has-error>
            </div>
            <div class="form-group">
              <input v-model="form.cargo" type="text" name="cargo" id="cargo"
                placeholder="Ingrese su cargo"
                class="form-control" :class="{ 'is-invalid': form.errors.has('cargo') }">
              <has-error :form="form" field="cargo"></has-error>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button v-show="editmode" type="submit" class="btn btn-success">Actualizar</button>
        <button v-show="!editmode" type="submit" class="btn btn-primary">Crear</button>
      </div>
     </form>
    </div>
  </div>
</div>

     </div>
</template>

<script>
    export default {
        data() {
            return {
                editmode : false,
                users : {},
                form: new Form({
                    id:'',
                    name: '',
                    cedula: '',
                    telefono: '',
                    email: '',
                    cargo: '',
                    type: '',
                    bio: '',
                    photo: ''
                })
            }
        },
        methods:{
            getResults(page = 1) {
              axios.get('api/user?page=' + page)
                .then(response => {
                  this.users = response.data;
                });
            },
            updateUser(id){
                this.$Progress.start();

                this.form.put('api/user/'+this.form.id)
                .then(() => {
                    $('#addNew').modal('hide');
                    swal.fire(
                        'Actualizado!',
                        'La información fue actualizada.',
                        'success'
                    )
                    this.$Progress.finish();
                    Fire.$emit('AfterCreate');
                })
                .catch(() => {
                    this.$Progress.fail();
                });
            },
            editModal(user){
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(user);
            },
            newModal(){
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },
            deleteUser(id){

                swal.fire({
                      title: '¿Estás seguro?',
                      text: "¡No podrás revertir esto!",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: '¡Sí, bórralo!'
                    }).then((result) =>
                    {
                        //send to the server
                        if(result.value)
                        {
                            this.form.delete('api/user/'+id).then(()=>{

                                swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                Fire.$emit('AfterCreate');
                            }).catch(()=>{
                                swal.fire(
                                    'Failed!',
                                    'Revise algo ocurrio JOrge',
                                    'warning'
                                )
                            })
                        }

                    })

            },
            loadUsers(){
                if(this.$gate.isAdminOrAuthor()){
                  axios.get("api/user").then(({data}) => (this.users = data));
                }

            },
            createUser(){

                this.$Progress.start();

                this.form.post('api/user')
                .then(()=>{

                    Fire.$emit('AfterCreate');
                    $('#addNew').modal('hide')

                    //toast.fire({
                    swal.fire({
                      type: 'success',
                      title: 'Usuario creado correctamente'
                    })

                    this.$Progress.finish();

                })
                .catch(()=>{

                })

            }
        },
        created() {
            Fire.$on('searching',()=> {
              let query = this.$parent.search;
              axios.get('api/findUser?q=' + query)
              .then((data)=>{
                  this.users = data.data

              })
              .catch(()=>{

              })
            })
            this.loadUsers();
            //aqui definimos el tiempo de respuesta para adquirir los datos
            //setInterval(() => this.loadUsers(), 3000);
            Fire.$on('AfterCreate',() => {
                this.loadUsers();
            });

        }
    }
</script>