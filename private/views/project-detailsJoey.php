<?php $this->layout("layoutProjectsDetailsJoey") ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a data-scroll class="logo" href="<?php echo url("homepage") ?>">
                  <svg id="Laag_1" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 791.79 245.24"><defs><style>.cls-1{fill:#6e59a2;}</style></defs><path class="cls-1" d="M521.63,126.82h-16v26.72h16c8.75,0,15-5,15-13.31S530.48,126.82,521.63,126.82Z" transform="translate(-26.13 -21.54)"/><path class="cls-1" d="M26.13,21.54V266.78H817.92V21.54Zm96.75,204.23H81.49V62.93h41.39Zm62.59-.19H144.08V62.93h41.39Zm58.87,0H229.56l-25.17-63V62.93h40Zm81.89-48c-17.41,0-26.25-8.17-26.25-18.16v-.95c0-.67.29-1.05,1.14-1.05H307c1,0,1.33.48,1.33,1.33,0,7,4.94,11.6,17.88,11.6,11.79,0,16-4.94,16-10.93,0-3.42-2-7-9.7-7.61l-15.88-1.14c-11.51-.95-16.64-6.09-16.64-14.07,0-8.66,7.51-18,24.15-18,17.69,0,24.06,8.09,24.06,17.88,0,.48-.38.95-1.43.95h-5.61c-.95,0-1.33-.28-1.42-1.61-.48-5-4.47-10-15.6-10-9.79,0-15.78,4.66-15.78,10.75,0,3.42,2.28,6.37,9,6.84L333,144.6c13,1.05,17.6,7.42,17.6,14.84C350.57,167.14,344.1,177.6,326.23,177.6Zm90.15-52.11a1.61,1.61,0,0,1-1.33,1.33H392.51v48.69a1.23,1.23,0,0,1-1.15,1.14h-6.08a1.23,1.23,0,0,1-1.14-1.14V126.82H361.6a1.61,1.61,0,0,1-1.33-1.33v-4.56a1.63,1.63,0,0,1,1.33-1.34h53.45a1.63,1.63,0,0,1,1.33,1.34Zm61.8,49.83a1.61,1.61,0,0,1-1.33,1.33H433.49a1.23,1.23,0,0,1-1.14-1.14V120.74a1.24,1.24,0,0,1,1.14-1.15H475.9a1.63,1.63,0,0,1,1.33,1.34v4.56a1.61,1.61,0,0,1-1.33,1.33H440.71v16.74h32.34a1.61,1.61,0,0,1,1.33,1.33v4.56a1.63,1.63,0,0,1-1.33,1.34H440.71v18.64h36.14a1.6,1.6,0,0,1,1.33,1.32Zm43.64-14.55H505.66v14.74a1.23,1.23,0,0,1-1.14,1.14h-6.09a1.23,1.23,0,0,1-1.14-1.14V120.74a1.24,1.24,0,0,1,1.14-1.15h23.39c13.41,0,23.2,7.71,23.2,20.64S535.14,160.77,521.82,160.77Zm49.72,14.74a1.23,1.23,0,0,1-1.14,1.14h-6.08a1.23,1.23,0,0,1-1.14-1.14V120.74a1.24,1.24,0,0,1,1.14-1.15h6.08a1.24,1.24,0,0,1,1.14,1.15Zm79.59,0a1.23,1.23,0,0,1-1.14,1.14h-4.47l-38.23-39.18a32.13,32.13,0,0,1-3.61-4.56h-.29v42.6a1.23,1.23,0,0,1-1.14,1.14h-6.08a1.23,1.23,0,0,1-1.14-1.14V120.74a1.24,1.24,0,0,1,1.14-1.15h4.56l37.37,38.23a35,35,0,0,1,4.28,5.33h.38V120.74a1.24,1.24,0,0,1,1.15-1.15H650a1.24,1.24,0,0,1,1.14,1.15Zm31.85,0a1.23,1.23,0,0,1-1.14,1.14h-6.09a1.23,1.23,0,0,1-1.14-1.14V120.74a1.24,1.24,0,0,1,1.14-1.15h6.09a1.24,1.24,0,0,1,1.14,1.15Zm79.58,0a1.23,1.23,0,0,1-1.14,1.14H757l-38.23-39.18a32.13,32.13,0,0,1-3.61-4.56h-.29v42.6a1.23,1.23,0,0,1-1.14,1.14H707.6a1.23,1.23,0,0,1-1.14-1.14V120.74a1.24,1.24,0,0,1,1.14-1.15h4.57l37.36,38.23a35,35,0,0,1,4.28,5.33h.38V120.74a1.24,1.24,0,0,1,1.15-1.15h6.08a1.24,1.24,0,0,1,1.14,1.15Z" transform="translate(-26.13 -21.54)"/></svg>

  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a data-scroll class="nav-link projectenLink" href="<?php echo url("homepage") ?>">HOME</a>
      </li>
      <li class="nav-item">
        <a data-scroll class="nav-link contactLink" href="<?php echo url("homepage") ?>">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
<section id="details">
  <div class="gridDetails">
    <div class="detailPic">
      <video width="788" controls>
        <source src="<?php echo site_url("/vid/joeyWeb.mp4") ?>" type="video/mp4">
        <source src="<?php echo site_url("/vid/joeyWeb.mp4") ?>" type="video/ogg">
        Your browser does not support HTML video.
      </video> 
    </div>
    <div class="detailText">
      <h2>JOEY VAN DER KUIJL - PORTFOLIO</h2>
      <p>Heeft jouw bedrijf nog geen visuele identiteit? Of heeft jouw nieuwe idee nog geen vorm? Wij kunnen helpen! STEPININ is een jong enthousiast team dat geïnteresseerd is in jouw verhaal. Wij creëren verschillende media-uitingen die aansluiten op jouw wensen en jouw doelgroep. Heeft jouw bedrijf nog geen gezicht? Geen probleem! Wij denken graag met je mee over de look and feel van je bedrijf. STEPININ bestaat uit twee vormgevers en twee develepers die graag met en voor jou aan de slag gaan.</p>
      <div class="jezelf">
        <img src="<?php echo site_url("/img/Stepinin_Joey.jpg") ?>" alt="foto van jezelf">
        <p>Hallo, ik ben Joey van der Kuijl één van de developers <br> van <span class="paars">Stepinin.</span></p>
      </div>

    </div>
  </div>
</section>


<div class="bottom"></div>