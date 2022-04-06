 @php
     use YoHang88\LetterAvatar\LetterAvatar;
     $avatar = new LetterAvatar(Auth::user()->name, 'circle', '200');
 @endphp
 <div id="avatar" class="text-center pt-1 p-sm-2">
     <img src="{{ $avatar->setColor('#198754', '#ffffff') }}" class="my-3 m-sm-2 border-white" alt="avatar pic" />
     <p class="mb-1 d-none d-sm-block">{{ Auth::user()->name }}</p>

 </div>
 <hr class="m-0">
