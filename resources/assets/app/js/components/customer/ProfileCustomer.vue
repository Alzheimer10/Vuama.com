<template>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 portler-card pt-1 pb-2">
        <!-- PORTLET MAIN -->
        <div class="profile-sidebar-portlet">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic text-center">
            <!-- CHANGE AVATAR TAB -->
                <img :src="user.avatar" alt="">
                <el-rate   v-model="value5"   disabled   show-score  :colors="['#F15632', '#F15632', '#F15632']" text-color="#333"   score-template="{value} puntos" class="mt-2"> </el-rate>
            <!-- END CHANGE AVATAR TAB -->
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <h3 class="text-center text-capitalize"></h3>
            </div>
            <!-- END SIDEBAR USER TITLE -->

        </div>
        <!-- END PORTLET MAIN -->
        <!-- PORTLET MAIN -->
        <div class="portlet">
            <!-- STAT -->
            <div class="row">
                <div class="col-6 br">
                    <div class="text-uppercase text-center"> Proyectos </div>
                    <div class="text-uppercase text-center"> 0 </div>
                </div>
                <div class="col-6">
                    <div class="text-uppercase text-center"> Saldo </div>
                    <div class="text-uppercase text-center"> 0.00$ </div>
                </div>
            </div>
            <hr>
            <!-- END STAT -->
            <div class="p-1">
                <div class="profile-desc-link">
                    <i class="fa fa-globe"></i>
                    <a href="#">www.keenthemes.com</a>
                </div>
                <div class="profile-desc-link">
                    <i class="fab fa-twitter"></i>
                    <a href="#">@keenthemes</a>
                </div>
                <div class="profile-desc-link">
                    <i class="fab fa-facebook"></i>
                    <a href="#">keenthemes</a>
                </div>
            </div>
        </div>
        <!-- END PORTLET MAIN -->
    </div>
    <el-form label-position="top" :model="user" :rules="rules" ref="user" size="medium" class="col-xs-12 col-md-6 col-lg-9">
      <h3 class="mb-0"><b>Datos de perfil</b></h3><hr class="mt-0">
      <div class="row">
        <el-form-item label="Nombre" prop="name" class="col-6 col-md-4">
            <el-input v-model="user.name" placeholder="Nombre" maxlength="30"></el-input>
        </el-form-item>

        <el-form-item label="Apellido" prop="lastname" class="col-6 col-md-4">
            <el-input v-model="user.lastname" placeholder="Apellido" maxlength="30"></el-input>
        </el-form-item>

        <el-form-item label="Correo eléctronico" prop="email" class="col-12 col-md-4">
            <el-input v-model="user.email" placeholder="email"></el-input>
        </el-form-item>

        <el-form-item label="Cédula" prop="ci" class="col-12 col-md-4 col-lg-3">
            <el-input v-model="user.ci" placeholder="cedula"></el-input>
        </el-form-item>

        <el-form-item label="Número de teléfono" prop="phone" class="col-12 col-md-4 col-lg-3">
          <el-input v-model="user.phone" placeholder="phone"></el-input>
        </el-form-item>

        <el-form-item label="Fecha de nacimiento" prop="dbirth" class="col-12 col-md-6 col-lg-3">
            <el-date-picker v-model="user.dbirth" type="date" placeholder="Fecha de nacimiento" :picker-options="dbirthOption">
            </el-date-picker>
        </el-form-item>
      </div>
      <el-form-item size="large" class="col-12 mt-2">
        <el-button type="primary" @click="submitForm('user')">Actualizar</el-button>
        <el-button @click="resetForm('user')">Cancel</el-button>
      </el-form-item>
    </el-form>
  </div>
</template>

<script>
import MaskedInput from 'vue-masked-input'
  export default {
    components: { 
      MaskedInput 
    },
    props: ['route'],
    data() {
      return {
        user:{},
        value5: 3.7,
        phone:'',
        dbirthOption: {
          disabledDate(time) {
            return time.getTime() > Date.now();
          }
        },
        rules: {
          name: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' },
            { min: 3, max: 30, message: 'La longitud debe ser de 3 a 30', trigger: 'blur' }
          ],
          lastname: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' },
            { min: 3, max: 30, message: 'La longitud debe ser de 3 a 30', trigger: 'blur' }
          ],
          email: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' },
            { type: 'email', message: 'Ingrese la dirección de correo electrónico correcta', trigger: 'blur,change' }
          ],
          ci: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' }
          ],
          phone: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' },
            { min: 9, message: 'La longitud minima es de 9 digitos', trigger: 'blur' }
          ]
        },
      };
    },
    mounted() {
        this.$emit('account:user')
    },
    methods: {
        submitForm(formName) {
            this.loading = true
            this.$refs[formName].validate((valid) => {
                if (valid) {
                    this.$routeLaravel('api.users.update',{user: this.user.id}).put(this.user)
                    .then(response => {
                        this.$message({  message: 'Sus datos se actualizaron',  showClose: true,  type: 'success'});
                        this.loading = false
                    });
                } else {
                  return false;
                }
            });
        },
        resetForm(formName) {
            this.$routeLaravel('api.users.show',{user: this.user.id}).get()
            .then(response => {
                this.$refs[formName].resetFields();
                this.user = response.data
                this.loading = false
            })

        }
    }
  };
</script>