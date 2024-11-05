<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>


<template>
    <Head title="Log in" />  
    <AuthenticationCard>
    <body class="hold-transition login-page">
     <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <ApplicationLogo />
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="fw-light">Sign in to continue.</h6>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ status }}
        </div>

        <form class="pt-3" @submit.prevent="submit">
            <div class="form-group">
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="form-control form-control-lg"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="USERNAME"
                />
            </div>
            <div>
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="form-group">
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="form-control form-control-lg"
                    required
                    autocomplete="current-password"
                    placeholder="PASSWORD"
                />
            </div>
            <div>
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="col-8">Remember me</span>
                </label>
            </div>

            <div class="mt-3 d-grid gap-2">
                <PrimaryButton class="btn btn-block btn-primary btn-lg fw-semibold auth-form-btn" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
            <div class="my-2 d-flex justify-content-between align-items-center">
                <Link v-if="canResetPassword" :href="route('password.request')" class="auth-link text-black">
                    Forgot your password?
                </Link>
            </div>

        </form>
      </div>
            </div>
          </div>
        </div>

      </div>

    </div>
         </body>
    </AuthenticationCard>
</template>


<style scoped>
@import url(../../Vendor/src/assets/vendors/mdi/css/materialdesignicons.min.css);
@import url(../../Vendor/src/assets/vendors/ti-icons/css/themify-icons.css);
@import url(../../Vendor/src/assets/vendors/css/vendor.bundle.base.css);
@import url(../../Vendor/src/assets/vendors/font-awesome/css/font-awesome.min.css);
@import url(../../Vendor/src/assets/css/style2.css);

</style>

<!--
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../../assets/images/logo.svg">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="fw-light">Sign in to continue.</h6>
                <form class="pt-3">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <a class="btn btn-block btn-primary btn-lg fw-semibold auth-form-btn" href="../../index.html">SIGN IN</a>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="mb-2 d-grid gap-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                  </div>
                  <div class="text-center mt-4 fw-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        content-wrapper ends
      </div>
       page-body-wrapper ends 
    </div>

-->