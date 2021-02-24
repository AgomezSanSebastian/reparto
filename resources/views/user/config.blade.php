<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuración de mi cuenta') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                      <!-- Información operación -->
                      <x-message-status class="mb-4" :status="session('status')" />
                      <!-- Validation Errors -->
                      <x-auth-validation-errors class="mb-4" :errors="$errors" />

                      <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                          @csrf

                          <!-- Name -->
                          <div>
                              <x-label for="name" :value="__('Name')" />

                              <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="Auth::user()->name" required autofocus />
                          </div>

                          <!-- Surname -->
                          <div class="mt-4">
                             <x-label for="surnames" :value="__('Surname')" />

                             <x-input id="surnames" class="block mt-1 w-full" type="text" name="surnames" :value="Auth::user()->surnames" required />
                          </div>

                          <!-- Email Address -->
                          <div class="mt-4">
                              <x-label for="email" :value="__('Email')" />

                              <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="Auth::user()->email" required />
                          </div>

                          <!-- Street -->
                          <div class="mt-4">
                            <x-label for="street" :value="__('Street')" />

                            <x-input id="street" class="block mt-1 w-full" type="text" name="street" :value="Auth::user()->street" required />
                         </div>

                         <!-- Phone -->
                         <div class="mt-4">
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="Auth::user()->phone" required />
                         </div>

                          <!-- Password -->
                          <div class="mt-4">
                              <x-label for="password" :value="__('Password')" />

                              <x-input id="password" class="block mt-1 w-full"
                                              type="password"
                                              name="password"
                                              required autocomplete="new-password" />
                          </div>

                          <!-- Confirm Password -->
                          <div class="mt-4">
                              <x-label for="password_confirmation" :value="__('Confirm Password')" />

                              <x-input id="password_confirmation" class="block mt-1 w-full"
                                              type="password"
                                              name="password_confirmation" required />
                          </div>

                          <div class="flex items-center justify-end mt-4">

                              <x-button class="ml-4">
                                  {{ __('Guardar cambios') }}
                              </x-button>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
 </x-app-layout>
