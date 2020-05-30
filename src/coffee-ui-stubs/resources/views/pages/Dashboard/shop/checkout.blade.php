@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb ">
    <ol class="breadcrumb bg-transparent text-orange-100">
        <li class="breadcrumb-item text-orange-100 " aria-current="page">
        <span class="mr-3 icon-list icon-badge-container mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="#8B6B61" class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
        </span>
        <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24.523 24.18">
                <g id="Group_515" data-name="Group 515" transform="translate(-344 -262)">
                    <path id="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(334.9 254.9)" fill="#6a6a6a"/>
                    <path id="icon-cheveron-right-2" data-name="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(344.9 254.9)" fill="#6a6a6a"/>
                </g>
            </svg>
        </span>
            eCommerce
        </li>
        <li class="">
            <span class="mr-3 ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24.523 24.18">
                    <g id="Group_515" data-name="Group 515" transform="translate(-344 -262)">
                        <path id="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(334.9 254.9)" fill="#6a6a6a"/>
                        <path id="icon-cheveron-right-2" data-name="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(344.9 254.9)" fill="#6a6a6a"/>
                    </g>
                </svg>
            </span>
            Checkout
        </li>
    </ol>
</nav>
<div class="card border-0 shadow">
    <div id="stepProgressBar">
        <div class="step">
            <div class="bullet">1</div>
        </div>
        <div class="step">
            <div class="bullet">2</div>
        </div>
        <div class="step">
            <div class="bullet">3</div>
        </div>
        <div class="step">
            <div class="bullet ">4</div>
        </div>
    </div>
    <div id="main">
        <div id="content">ok</div>
        <button id="previousBtn" >Previous</button>
        <button id="nextBtn">Next</button>
        <button id="finishBtn" >Finish</button>
    </div>
</div>

@endsection

@push('scripts')
<script>
   const  previousBtn  =  document.getElementById('previousBtn');
    const  nextBtn  =  document.getElementById('nextBtn');
    const  finishBtn  =  document.getElementById('finishBtn');
    const  content  =  document.getElementById('content');
    const  bullets  =  [...document.querySelectorAll('.bullet')];

    const MAX_STEPS = 4;
    let currentStep = 1;

    nextBtn.addEventListener('click',  ()  =>  {
        bullets[currentStep  -  1].classList.add('completed');
        currentStep  +=  1;
        previousBtn.disabled  =  false;
        if  (currentStep  ===  MAX_STEPS)  {
            nextBtn.disabled  =  true;
            finishBtn.disabled  =  false;
        }
        content.innerText  =  `Step Number ${currentStep}`;
    });


    previousBtn.addEventListener('click',  ()  =>  {
        bullets[currentStep  -  2].classList.remove('completed');
        currentStep  -=  1;
        nextBtn.disabled  =  false;
        finishBtn.disabled  =  true;
        if  (currentStep  ===  1)  {
            previousBtn.disabled  =  true;
        }
        content.innerText  =  `Step Number ${currentStep}`;
    });

    finishBtn.addEventListener('click',  ()  =>  {
        location.reload();
    });
</script>

@endpush