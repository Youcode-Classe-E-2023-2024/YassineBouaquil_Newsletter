<template>
    <div>
        <form @submit.prevent="handlelogin" class="mt-5 m-4 p-6">
            <div class="form-group">
                <label for="email" class="text-muted">Email Address</label>
                <input type="text" class="form-control form-control-lg" id="email" v-model="form.email" placeholder="Enter your email" required>
                <span class="text-danger small" v-if="errors.email">{{ errors.email[0] }}</span>
            </div>
            <div class="form-group">
                <label for="password" class="text-muted">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control form-control-lg" id="password" v-model="form.password" placeholder="Enter your password" required>
                    <div class="input-group-append">
                <span class="input-group-text">
                    <i class="bi bi-eye-slash" id="password-toggle"></i>
                </span>
                    </div>
                </div>
                <span class="text-danger small" v-if="errors.password">{{ errors.password[0] }}</span>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                </div>
                <a href="#" class="float-right text-muted">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
        </form>





    </div>
</template>

<script>
    import {handleError} from "vue";

    export default {
        data(){
            return{
                form:{email: null ,password: null},
                errors:{}

            }
        },
        methods:{
           async handlelogin() {
               try{
                   await axios.get('/sanctum/csrf-cookie');
                   await axios.post('/login', this.form);
                   window.location = '/home';
               }catch (error){
                   this.errors = error.response.data.errors;
               }
               }
         }

    }
</script>
