<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body,
input {
  font-family: "Poppins", sans-serif;
}



.forms-container {
  position: absolute !important;
  width: 100% !important;
  height: 100% !important;
  top: 0 !important;
  left: 0 !important;
}

.signin-signup {
  position: absolute !important;
  top: 50% !important;
  transform: translate(-50%, -50%) !important;
  left: 75% !important;
  width: 50% !important;
  transition: 1s 0.7s ease-in-out !important;
  display: grid !important;
  grid-template-columns: 1fr !important;
  z-index: 5 !important;
}

form {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  flex-direction: column !important;
  padding: 0rem 5rem !important;
  transition: all 0.2s 0.7s !important;
  overflow: hidden !important;
  grid-column: 1 / 2 !important;
  grid-row: 1 / 2 !important;
}

form.sign-up-form {
  opacity: 0;
  z-index: 1;
}

form.sign-in-form {
  z-index: 2;
}

.title {
  font-size: 2.2rem;
  color: #444;
  margin-bottom: 10px;
}

.input-field {
  max-width: 380px !important;
  width: 100% !important;
  background-color: #f0f0f0 !important;
  margin: 10px 0 !important;
  height: 55px !important;
  border-radius: 55px !important;
  display: grid !important;
  grid-template-columns: 15% 85% !important;
  padding: 0 0.4rem !important;
  position: relative !important;
}

.input-field i {
  text-align: center !important;
  line-height: 55px !important;
  color: #acacac !important;
  transition: 0.5s !important;
  font-size: 1.1rem !important;
}

.input-field input {
  background: none !important;
  outline: none !important;
  border: none !important;
  line-height: 1 !important;
  font-weight: 600 !important;
  font-size: 1.1rem !important;
  color: #333 !important;
}

.input-field input::placeholder {
  color: #aaa !important;
  font-weight: 500 !important;
}



.btn {
  width: 150px !important;
  background-color: #ff7125 !important;
  border: none !important;
  outline: none !important;
  height: 49px !important;
  border-radius: 49px !important;
  color: #fff !important;
  text-transform: uppercase !important;
  font-weight: 600 !important;
  margin: 10px 0 !important;
  cursor: pointer !important;
  transition: 0.5s !important;
}

.btn:hover {
  background-color: #4d84e2 !important;
}
.panels-container {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}



.image {
  width: 100%;
  transition: transform 1.1s ease-in-out;
  transition-delay: 0.4s;
}

.panel {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: space-around;
  text-align: center;
  z-index: 6;
}

.left-panel {
  pointer-events: all;
  padding: 3rem 17% 2rem 12%;
}

.right-panel {
  pointer-events: none;
  padding: 3rem 12% 2rem 17%;
}

.panel .content {
  color: #fff;
  transition: transform 0.9s ease-in-out;
  transition-delay: 0.6s;
  padding: 100px;
}

.panel h3 {
  font-weight: 600;
  line-height: 1;
  font-size: 1.5rem;
}

.panel p {
  font-size: 0.95rem;
  padding: 0.7rem 0;
}

.btn.transparent {
  margin: 0;
  background: none;
  border: 2px solid #fff;
  width: 130px;
  height: 41px;
  font-weight: 600;
  font-size: 0.8rem;
}




</style>
@extends('layouts.head')

@section('content')

<form method="POST" action="{{ route('password.email') }}"  class="sign-in-form">
			  @csrf
            <h2 class="title">Recupera la contraseña</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            </div>
           
            <div class="form-group row mb-0">
				<br>
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
								<input type="button" class="btn btn-primary" onclick="history.back()" name="volver atrás" value="Cancelar">
                            </div>
                        </div>
              
          </form>


@endsection
