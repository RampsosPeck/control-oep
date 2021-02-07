<style>
.widget-user-header{
    background-position: center center;
    background-size: cover; 
    height: 300px;

}
</style>
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card card-widget widget-user">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header text-black" style="background: url('/img/content.png') center center;">
                        <h3 class="widget-user-username">{{ this.form.name }}</h3>
                        <h5 class="widget-user-desc">{{ this.form.type }}</h5>
                      </div>
                      <div class="widget-user-image">
                        <img class="img-circle" :src="getProfilePhoto()" alt="User Avatar">
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <h5 class="description-header">3,200</h5>
                              <span class="description-text">SALES</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <h5 class="description-header">13,000</h5>
                              <span class="description-text">FOLLOWERS</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4">
                            <div class="description-block">
                              <h5 class="description-header">35</h5>
                              <span class="description-text">PRODUCTS</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                </div>

                    <div class="card">
                      <div class="card-header p-2">
                        <ul class="nav nav-pills">
                          <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li> 
                          <li class="nav-item"><a class="nav-link active show" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                      </div><!-- /.card-header -->
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                              <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="/img/user.png" alt="user image">
                                <span class="username">
                                  <a href="#">Jonathan Burke Jr.</a>
                                  <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                </span>
                                <span class="description">Shared publicly - 7:30 PM today</span>
                              </div>
                              <!-- /.user-block -->
                              <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                              </p>

                              <p>
                                <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i> Like</a>
                                <span class="float-right">
                                  <a href="#" class="link-black text-sm">
                                    <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                  </a>
                                </span>
                              </p>

                              <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                            </div>
                            <!-- /.post -->

                            <!-- Post -->
                            <div class="post clearfix">
                              <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="/img/user.png" alt="User Image">
                                <span class="username">
                                  <a href="#">Sarah Ross</a>
                                  <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                </span>
                                <span class="description">Sent you a message - 3 days ago</span>
                              </div>
                              <!-- /.user-block -->
                              <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                              </p>

                              <form class="form-horizontal">
                                <div class="input-group input-group-sm mb-0">
                                  <input class="form-control form-control-sm" placeholder="Response">
                                  <div class="input-group-append">
                                    <button type="submit" class="btn btn-danger">Send</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.post -->

                            <!-- Post -->
                            <div class="post">
                              <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="/img/user.png" alt="User Image">
                                <span class="username">
                                  <a href="#">Adam Jones</a>
                                  <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                </span>
                                <span class="description">Posted 5 photos - 5 days ago</span>
                              </div>
                              <!-- /.user-block -->
                              <div class="row mb-3">
                                <div class="col-sm-6">
                                  <img class="img-fluid" src="/img/user.png" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <img class="img-fluid mb-3" src="/img/user.png" alt="Photo">
                                      <img class="img-fluid" src="/img/user.png" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                      <img class="img-fluid mb-3" src="/img/user.png" alt="Photo">
                                      <img class="img-fluid" src="/img/user.png" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                  </div>
                                  <!-- /.row -->
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->

                              <p>
                                <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i> Like</a>
                                <span class="float-right">
                                  <a href="#" class="link-black text-sm">
                                    <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                  </a>
                                </span>
                              </p>

                              <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                            </div>
                            <!-- /.post -->
                          </div>
                          <!-- /.tab-pane -->
                         

                          <div class="tab-pane active show" id="settings">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-12">
                                  <input type="text" v-model="form.name" class="form-control" id="inputName" placeholder="Name" :class="{ 'is-invalid': form.errors.has('name')}">
                                    <has-error :form="form" field="name"></has-error>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-12">
                                  <input type="email" v-model="form.email" class="form-control" id="inputEmail" placeholder="Email"
                                  :class="{ 'is-invalid': form.errors.has('email')}">
                                  <has-error :form="form" field="email"></has-error>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputExperience" class="col-sm-4 control-label">Experience</label>

                                <div class="col-sm-12">
                                  <textarea v-model="form.bio" class="form-control" id="inputExperience" placeholder="Experience" :class="{ 'is-invalid': form.errors.has('bio')}"></textarea>
                                  <has-error :form="form" field="bio"></has-error>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="photo" class="col-sm-4 control-label">Profile Photo</label>

                                <div class="col-sm-12">
                                  <input type="file" @change="updateProfile" name="photo" class="form-input" :class="{ 'is-invalid': form.errors.has('photo')}">
                                  <has-error :form="form" field="photo"></has-error>

                                </div>
                              </div>

                              <div class="form-group">
                                <label for="password" class="col-sm-12 control-label">Password (leave empty if not changing)</label>

                                <div class="col-sm-12">
                                  <input type="password" v-model="form.password" class="form-control" id="password" 
                                  placeholder="Password" :class="{ 'is-invalid': form.errors.has('password')}">
                                  <has-error :form="form" field="password"></has-error>

                                </div>
                              </div>
                
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-12">
                                  <button @click.prevent="updateInfo" type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                              </div>
                            </form>
                          </div>
                          <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                      </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom --> 
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data(){
            return {
                form: new Form({
                    id: '',
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo:''
                })
            }
        }, 

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            getProfilePhoto(){
                let photo = (this.form.photo.length > 200) ? this.form.photo : "img/profile/"+ this.form.photo;
                return photo;
               // return "img/profile/"+ this.form.photo;
            },
            updateInfo(){
                this.$Progress.start();
                this.form.put('api/profile/')
                .then(()=>{

                    Fire.$emit('AfterCreate');
                    swal.fire({
                      type: 'info',
                      title: 'Usuario actualizado'
                    })

                    this.$Progress.finish();
                })
                .catch(()=>{
                    this.$Progress.fail();
 
                });
            },
            updateProfile(e){
                //console.log('uploading');
                let file = e.target.files[0];
                console.log(file);
                let reader = new FileReader(); 
                if(file['size'] < 2111775 )
                {
                    reader.onloadend = (file) => {
                        //console.log('RESULT', reader.result)
                        this.form.photo = reader.result;
                    }
                    reader.readAsDataURL(file);
                }else{
                    swal.fire({
                      type: 'error',
                      title: 'Oops...',
                      text: 'La imagenes es demaciado grande!'
                    })
                }
                
            }
        },

        created() {
            axios.get("api/profile")
            .then(({data}) => (this.form.fill(data)));
        }

    }
</script>
