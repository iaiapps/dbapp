 <form id="formloginsiswa" method="POST" action="{{ route('login') }}">
     @csrf
     <h3>Login Siswa</h3>
     <a href="{{ route('login_siswa_google', 'google_siswa') }}" class="btnG">
         <img src="{{ url('/dbapps') }}/img/search.svg" alt="google" /> Login with "Google"</a>
     <div class="line">atau</div>

     <label for="email" class="label">Email</label>
     <input type="email" placeholder="email" class="input" name="email" />

     <label for="password" class="label">Password</label>
     <input type="password" placeholder="password" class="input" name="password" />

     <button type="submit" class="button">Login</button>
 </form>
