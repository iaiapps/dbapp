 @php
     use YoHang88\LetterAvatar\LetterAvatar;
     $avatar = new LetterAvatar(Auth::user()->name, 'circle', '200');
 @endphp
 <div id="avatar" class="text-center pt-1 p-sm-2">
     {{-- <img src="{{ $avatar->setColor('#ffffff', '#000000') }}" class="m-2 border-white" alt="avatar pic" /> --}}
     <img src="{{ $avatar->setColor('#198754', '#ffffff') }}" class="m-2 border-white" alt="avatar pic" />
     <p class="fs-5 mb-0 ">{{ Auth::user()->name }}</p>
 </div>
