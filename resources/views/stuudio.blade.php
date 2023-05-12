@extends('layouts.main')

@section('content')

<body>
    
<div id="container">
    <h3 style="text-decoration: underline; text-decoration-color: #fddfd5;">Stuudiost</h3>
    <p>siia tuleb mingi jutt stuudio kohta</p>
</div>

    <div>
    
  <section style="margin-left: 700px; margin: bottom 300px;">
		<article>
			<figure>
				<h2>Helen Reimand</h2>
				<p>Mingi info treeneri kohta</p>
			</figure>
			<img alt src='https://cristinafsanz.github.io/images/avatar.png' />
		</article>
		<article>
			<figure>
			<h2>Treener 2</h2>
				<p>Mingi info treeneri kohta</p>
			</figure>
			<img alt src='https://cristinafsanz.github.io/images/avatar.png' />
		</article>

		
		<article>
			<figure>
				<h2>Treener 3<h2>
					<p>Mingi info treeneri kohta</p>
			</figure>
			<img alt src='https://cristinafsanz.github.io/images/avatar.png' />
		</article>
		
		

			
<svg width="0" height="0">
  <defs>
    <clipPath id="hexagono" clipPathUnits="objectBoundingBox">
      <polygon points=".25 0, .75 0, 1 .5, .75 1, .25 1, 0 .5" />
    </clipPath>
  </defs>
</svg>
    </div>

</body>


<style>

body {
  font-family: 'Open Sans', sans-serif;
  background-color: #e0e0e0;
}
#container {
    margin-left: 80px;
    margin-top: 60px;
    

}
article {
  background: white;
  width: 600px;
  padding: 20px;
  position: relative;
  margin-top: 60px;
  margin-left: 200px;
  
}

article::after {
  content: "";
  position: absolute;
  top: 100%;
  height: 20px;
  width: 100%;
  left: 0;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/23618/rip.svg) bottom;
  background-size: 200%;
}
/*
@media (max-width: 760px) {
      article {
        width: 90%;
      }
    }
    
    /* Center article for screens smaller than 768px 
    @media (max-width: 760px) {
      article {
        margin: 60px auto;
      }
    }
    */
/*
    *, *:after, *:before {box-sizing: inherit;}
* {margin:0;padding:0;border: 0 none; position: relative;}*/
:root {
	--sinSerif: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
	--Nhexa: 4;
	--gap: 2vw;
	--size: calc(calc(100vw / var(--Nhexa)) - var(--gap));
}
@media only screen and (min-width: 1100px) {:root {--Nhexa: 6;}}
@media only screen and (max-width: 600px) {
	:root {--Nhexa: 2;}
	body {margin-right: calc(var(--size) * .3);}
}
html {
	background: #e9e9e7;
  box-sizing: border-box;
	font-family: var(--sinSerif);
	font-size: 1rem;
}


section {
    margin-left: 700px;
    grid-template-columns: repeat(var(--Nhexa), 1fr);
    grid-gap: var(1vh);
}

article {
	background: #fbccbd;
  width: var(--size); 
  height: calc(var(--size) / 1.1111111);
	clip-path: url(#hexagono);
  clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);
  margin-right: calc(var(--size) / 2);
	color: #fff;
	overflow: hidden;
}
article:nth-child(2n) {margin: calc(var(--size) * -.5) calc(var(--size) * -.25) 0 calc(var(--size) * -.75);}
article::before {
	content: '';
	float: left;
	width: 25%;
	height: 100%;
	clip-path: polygon(0% 0%, 100% 0%, 0% 50%, 100% 100%, 0% 100%);
	shape-outside: polygon(0% 0%, 100% 0%, 0% 50%, 100% 100%, 0% 100%);
}



/*
img {
    width: var(--size);
	height: var(--size);
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	transform-origin: 0% 50%;
	transition: .75s;
	clip-path: url(#hexagono);
	clip-path: inherit;
	z-index:  10;
}*/
article:hover img {transform: translate(-50%, -50%) rotate(-110deg);}
h2 {font-size: 100%;}
figure {
	display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: center;
	max-width: 50%;
	height: 100%;
	font-size: calc(9 / var(--Nhexa) * 1vw);
	line-height: 1;
	color: #fff;
	transition: .75s .05s;
    text-align: center;
}
figure p {
	font-size: 70%;
	line-height: 1.2;
	width: 100%;
}

/*
body > p {
	font-size: 1.5rem;
	margin: 2rem 0 1rem calc(var(--size) * .5);
	font-weight: 200;
}
*/

</style>



@endsection