<?php $body_class="page-index"; include('header.php'); ?>
<script>
	var body_class="index";
</script>

<div class="main-wrapper">
	<div class="head-line">
		<div class="arrow"></div>
	</div>

	<div class="intro-wrapper">
		<h1><span class="fontawesome-beaker fontawesome"></span>My Little Lab</h1>
		<p>Som relativ ny innenfor front-end faget er det mye man burde sette seg inn i, og ikke
			minst holde seg oppdatert om. My Little Lab vil være et sted der jeg laster opp mindre 
			prosjekter der jeg tar i bruk nye teknologier, innenfor HTML, CSS og JavaScrip(jQuery). 
			Alle prosjektene vil være linket opp mot Codepen, og i tillegg lastet opp på Github. De fleste 
			prosjektene vil ta utgangspunkt eller inspirasjon i prosjekter som andre har utviklet tidligere. 
		</p>
	</div>

    <div class="content-wrapper">
        <article class="case one hovered" data-class="hover-case-one" data-click="has-case-one">
        	<a href="case1.php" alt="Go to case one!">
	        	<div class="fade">
		        	<div class="content">
		        		<div class="top-content">
						    <div class="date">
						        <p class="day">26</p>
						        <p class="month">May</p>
						        <p class="year">2013</p>
						   	</div>

						   	<div class="intro-section" id="intro-section">
						   		<h2>Full screen menu</h2>
						   		<p class="italic">
						   			Four simple choices! Noen nettsider behøver ikke ha uendelig 
						   			mange menyvalg, for eksempel en portfolienettside.
						   		</p>
						   	</div>
						</div>
						<div class="image-wrapper">
					   		<img src="img/full-screen.jpg"> 
					   	</div>
					   	<div class="bottom-content">
					   		<p>
					   			Ofte vet brukeren allerede før de går inn på nettsiden hva slags
					   			informasjon de er ute etter. Ofte føler jeg at visse bedrifter egentlig
					   			ikke ønsker at brukeren skal finne frem til den ønskede informasjonen.
					   			Noen ganger er det enkleste det beste.
					   		</p>

					   		<button type="button" class="button">
					   			<p class="not-hovered fontawesome-screenshot">Hover over here!</p>
					   			<a href="case1.php" class="hovered fontawesome-cogs">Tell me more!</a>
					   		</button>
					    </div>
		        	</div>
		        </div>
		    </a>
        </article>

        <article class="case two" data-class="hover-case-two" data-click="has-case-two">
	        <a href="case2.php" alt="Go to case two!">
		        <div class="fade">	
		        	<div class="content">
		        		<div class="top-content">
			        		<div class="date">
						        <p class="day">24</p>
						        <p class="month">May</p>
						        <p class="year">2013</p>
						   	</div>

						   	<div class="intro-section">
						   		<h2>Simpel bildefremvisning</h2>
						   		<p class="italic">
						   			Et lite bildegalleri som ved hjelp av CSS clip Property kan vise frem
						   			bilder i forskjellige utsnitt og størrelser. Super enkel kode!
						   		</p>
						   	</div>
						</div>
						<div class="image-wrapper">
					   		<img src="img/case-2-image.jpg"> 
					   	</div>
					   	<div class="bottom-content">
					   		<p>
					   			Dersom en kun skal ha et lite utvalg av bilder som skal vises i ett galleri,
					   			er det fullt mulig og kun lage ditt eget lille bildefremvisnings side. Ellers 
					   			er dette en god måte og kunne lære seg litt om CSS3 Clip Property. Let's take a look!
					   		</p>
					   		
					   		<button type="button" class="button">
					   			<p class="not-hovered fontawesome-screenshot">Hover over here!</p>
					   			<a href="case2.php" class="hovered fontawesome-cogs">Tell me more!</a>
					   		</button>
					    </div>
		        	</div>
		        </div>
		    </a>
        </article>

        <article class="case three last" data-class="hover-case-three" data-click="has-case-three">
	       <a href="case3.php" alt="Go to case three!">
		        <div class="fade">	
		        	<div class="content">
		        		<div class="top-content">
			        		<div class="date">
						        <p class="day">23</p>
						        <p class="month">May</p>
						        <p class="year">2013</p>
						   	</div>

						   	<div class="intro-section">
						   		<h2>CSS Creatures</h2>
						   		<p class="italic">Uansett om du er en front-end utvikler, designer eller
						   			ingen av delene, har du mest sannsynling sett et CSS Creature.
						   		</p>
						   	</div>
						</div>
						<div class="image-wrapper">
					   		<img src="img/ninja.png"> 
					   	</div>
					   	<div class="bottom-content">
					   		<p>
					   			Som front-end utvikler er det spennende å utforske de nye muligheter som CSS3 har bragt med
					   			seg. Jeg har vært veldig fasinert av det jeg liker å kalle CSS Creatures fra første gangen 
					   			jeg så ett - wow! Kan man virkelig style det der der, kun med CSS? 
					   		</p>
					    	<button type="button" class="button">
					   			<p class="not-hovered fontawesome-screenshot">Hover over here!</p>
					   			<a href="case3.php" class="hovered fontawesome-cogs">Tell me more!</a>
					   		</button>
					    </div>
		        	</div>
		        </div>
		    </a>
        </article> 
    </div>
</div>
       
<?php include('footer.php'); ?>
       


