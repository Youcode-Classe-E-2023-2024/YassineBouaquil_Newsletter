<template>
    <div>
        <form @submit.prevent="handlelogin" class="mt-5 mx-auto p-5 bg-dark text-light rounded-lg shadow-lg" style="max-width: 400px;">
            <h2 class="text-center mb-4">🚀 Sign In to Your Account</h2>
            <div class="form-group">
                <label for="email" class="text-light">📧 Email Address</label>
                <input type="email" class="form-control form-control-lg bg-transparent text-light border-light" id="email" v-model="form.email" placeholder="Enter your email" required>
                <span class="text-danger small" v-if="errors.email">{{ errors.email[0] }}</span>
            </div>
            <div class="form-group">
                <label for="password" class="text-light">🔐 Password</label>
                <div class="input-group">
                    <input type="password" class="form-control form-control-lg bg-transparent text-light border-light" id="password" v-model="form.password" placeholder="Enter your password" required>

                </div>
                <span class="text-danger small" v-if="errors.password">{{ errors.password[0] }}</span>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label text-muted" for="rememberMe">Remember Me</label>
                </div>
                <a href="#" class="float-right text-light">Forgot Password? 🤔</a>
            </div>
            <button type="submit" class="btn btn-warning btn-lg btn-block">Sign In 🚀</button>
            <p class="mt-3 text-center">New to our platform? <a href="#" class="text-warning">Sign Up Now 🌟</a></p>
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
