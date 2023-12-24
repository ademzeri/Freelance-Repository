<div class="deznav">
   <div class="deznav-scroll">
      <ul class="metismenu" id="menu"> 
        <li><a href="{{ url('widget-basic')}}" class="ai-icon" aria-expanded="false">
            <i class="fa-solid fa-house"></i>
            <span class="nav-text">Home</span>
            </a>
         </li>
         <li><a href="{{ url('widget-basic')}}" class="ai-icon" aria-expanded="false">
            <i class="fa-solid fa-code"></i>            
            <span class="nav-text">Developers</span>
            </a>
         </li>
         <li>
            <a href="{{ url('widget-basic')}}" class="ai-icon has-arrow" aria-expanded="false">
                <i class="fa-solid fa-book"></i>
                <span class="nav-text">Documentation</span>
            </a>
            <ul aria-expanded="false">
               <li><a href="{{ url('basic-tutos')}}">Basic Tutorials</a></li>
               <li><a href="{{ url('integration-guide')}}">Integration Guide</a></li>
               <li><a href="{{ url('product-guide')}}">Product Guide</a></li>
               <li><a href="{{ url('api-reference')}}">API Reference</a></li>
            </ul>
         </li>
         <div class="mx-auto pt-8">
            <p class="text-md text-[#F62D53] !font-semibold">Products</p>
         </div>
         <li>
            <a href="{{ url('widget-basic')}}" class="ai-icon" aria-expanded="false">
                <i class="fa-solid fa-skull-crossbones"></i>
                <span class="nav-text">Blocker</span>
            </a>
         </li>
         <li>
            <a href="{{ url('shortlink')}}" class="ai-icon" aria-expanded="false">
                <i class="fa-solid fa-paperclip"></i>
                <span class="nav-text">ShortLinker</span>
            </a>
         </li>
         <li>
            <a href="{{ url('widget-basic')}}" class="ai-icon has-arrow" aria-expanded="false">
                <i class="fa-solid fa-gear"></i>
                <span class="nav-text">customization</span>
            </a>
            <ul aria-expanded="false">
               <li><a href="{{ url('basic-tutos')}}">Bot Redirection</a></li>
               <li><a href="{{ url('integration-guide')}}">Allowed Country</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="fa-solid fa-earth-europe"></i>
            <span class="nav-text">IP Management</span>
            </a>
            <ul aria-expanded="false">
               <li><a href="{{ url('black-list')}}">BlackList IPs</a></li>
               <li><a href="{{ url('white-list')}}">WhiteList IPs</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-rocket"></i>
                <span class="nav-text">Identify Tools</span>
            </a>
            <ul aria-expanded="false">
               <li><a href="{{ url('black-list')}}">Disposable Email</a></li>
               <li><a href="{{ url('white-list')}}">Phone Number</a></li>
            </ul>
         </li>
         <li>
            <a href="{{ url('widget-basic')}}" class="ai-icon" aria-expanded="false">
                <i class="fa-solid fa-eye"></i>
                <span class="nav-text">Computer Vision</span>
            </a>
         </li>
      </ul>
      <div class="text-center mt-6">
         <button class="bg-[#F72B50] hover:bg-[#F7081A] text-white font-semibold py-2 px-4 rounded flex flex-row items-center gap-2 mx-auto">
            Logout
            <i class="fa-solid fa-right-from-bracket"></i>
         </button>

      </div>
   </div>
</div>
