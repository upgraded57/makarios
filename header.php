<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Makarios | The Luxury Place</title>
    <link rel="stylesheet" href="./style.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>

@import url("https://fonts.googleapis.com/css2?family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Montaga&display=swap");

:root {
  --black-clr: #1a1a1a;
  --pry-clr: #636262;
  --light-gold-clr: #fff4d8;
  --dark-gold-clr: #d39b10;
  --green-clr: #154533;
  --light-grey-clr: #f0f0f0;
  --radius-sm: 5px;
  --radius-md: 8px;
  --radius-lg: 22px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  color: var(--pry-clr);
  scroll-behavior: smooth;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Noticia Text", serif;
}

h2 {
  font-size: 48px;
}

h3 {
  font-size: 36px;
}

p,
a,
button,
li {
  font-family: "Montaga", serif;
}

button,
a,
label {
  -webkit-tap-highlight-color: transparent;
}

p {
  font-size: 20px;
  line-height: 34px;
}

button {
  border-radius: var(--radius-md);
  padding: 10px 16px;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 20px;
}

button:active {
  transform: translateY(1px);
}

.top-bar {
  width: 100%;
  height: 80px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: var(--green-clr);
}

.top-bar img {
  height: 50px;
  object-fit: contain;
}

.hero {
  display: flex;
  background: #c7c7c7;
  height: calc(100vh - 70px);
  /* padding-inline: 4vw; */
  padding-top: 10vh;
  background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg");
  background-size: cover;
  background-position: bottom right;
}

.hero-content {
  width: 100%;
  max-width: 1440px;
  margin-inline: auto;
  padding-inline: 4vw;
}

.hero h2 span {
  color: var(--dark-gold-clr) !important;
}

.hero p {
  margin-block: 20px;
  max-width: 600px;
}

.hero button {
  max-width: 600px;
  background: #154533;
  color: white;
}

.container {
  max-width: 1440px;
  margin-inline: auto;
  padding-inline: 4vw;
}

.showcase {
  background: white;
  box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px,
    rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
  border-radius: var(--radius-lg);
  padding: 4vw;
  position: relative;
  top: -40px;
}

.showcase .toggler {
  display: flex;
  align-items: center;
  justify-content: start;
  gap: 20px;
}

.showcase .toggler span {
  border-radius: var(--radius-md);
  background: var(--light-grey-clr);
  padding: 10px 16px;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 20px;
  color: var(--green-clr);
}

input[type="radio"]#luxury:checked ~ span,
input[type="radio"]#champion:checked ~ span {
  background: var(--green-clr);
  color: white;
}

.luxury {
  display: flex;
  align-items: start;
  justify-content: space-between;
  gap: 20px;
  margin-top: 50px;
}

.luxury-img {
  flex-basis: 60%;
  width: 100%;
  overflow: hidden;
  border-radius: var(--radius-md);
}

.luxury-img img {
  width: 100%;
  object-fit: cover;
}

.luxury-img iframe {
  width: 100%;
  height: 350px;
  object-fit: cover !important;
}

.luxury-text {
  flex-basis: 40%;
}

.luxury-text h2 {
  color: var(--dark-gold-clr);
  margin-bottom: 10px;
  text-align: center;
}

.luxury-carousel {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  margin-top: 30px;
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
  scrollbar-width: none;
}

.luxury-carousel::-webkit-scrollbar {
  display: none;
}

.luxury-carousel .item {
  width: 100%;
  min-width: 300px;
  border-radius: var(--radius-md);
  overflow: hidden;
  scroll-snap-align: center;
}

.luxury-carousel .item .item-img {
  width: 100%;
  border-radius: var(--radius-md);
  overflow: hidden;
}

.luxury-carousel .item img {
  width: 100%;
  transform: scale(110%);
  object-fit: cover;
}

.luxury-container .cursors {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 10px;
  margin-bottom: 30px;
}

.luxury-container .cursors span {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: white;
  border: 1px solid var(--green-clr);
}

.luxury-container .cursors span:first-child {
  background: var(--green-clr);
}

.luxury-features h2 {
  text-align: center;
  color: var(--dark-gold-clr);
  margin-bottom: 10px;
}

.luxury-features:nth-child(2) {
  margin-top: 50px;
}

.luxury-features .features {
  display: flex;
  flex-wrap: wrap;
  column-gap: 60px;
  row-gap: 10px;
  align-items: center;
  justify-content: center;
}

.luxury-features .features .feature {
  display: flex;
  align-items: center;
  gap: 10px;
}

.pricing {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  margin-top: 50px;
}

.pricing h2 {
  color: var(--dark-gold-clr);
}

.pricing .table-container {
  width: 100%;
  overflow-x: scroll;
  scrollbar-width: none;
}

.pricing .table-container::-webkit-scrollbar {
  display: none;
}

.pricing table {
  margin-top: 10px;
  width: 100%;
  border-collapse: collapse;
  border-spacing: 30px 10px;
  table-layout: auto;
  white-space: nowrap;
  background: white;
  border: 1px solid var(--light-grey-clr);
}

.pricing table thead {
  background: var(--green-clr);
}
.pricing table thead td {
  color: white;
}

.pricing table tr:not(:last-child) {
  border-top: 1px solid var(--light-grey-clr);
  border-bottom: 1px solid var(--light-grey-clr);
}

.pricing table td {
  padding: 10px 20px;
}

.pricing table thead {
  font-weight: 700;
}

.champion-container {
  display: none;
}

.champion-container .properties {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 20px;
  margin-bottom: 10px;
}

.champion-container .properties p.title {
  font-size: 24px;
}

.champion-container .properties span {
  height: 60px;
  display: block;
  width: 2px;
  background: #d9d9d9;
}

.faqs {
  margin-top: 50px;
}

.faqs h2 {
  text-align: center;
  color: var(--dark-gold-clr);
}

.faq-box details:not(:last-child) {
  border-bottom: 2px solid #d9d9d9;
  margin-bottom: 10px;
}

.faq-box details summary {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 10px;
  cursor: pointer;
}

.faq-body {
  transform-origin: top;
  max-height: auto;
  transition: 0.5s linear;
  overflow-y: hidden;
}

.contact {
  margin-top: 50px;
  background: var(--light-grey-clr);
  padding-block: 20px;
}

.contact h2 {
  text-align: center;
  margin-bottom: 10px;
}

.contact h2 span {
  color: var(--dark-gold-clr);
}

.contact form .textbox {
  display: flex;
  align-items: center;
  background: white;
  margin-bottom: 10px;
  border-radius: var(--radius-sm);
  border: 2px solid #afafaf;
  padding-inline: 8px;
  gap: 10px;
}

.contact form .textbox p {
  white-space: nowrap;
  opacity: 60%;
}

.contact form .inputs {
  display: grid;
  column-gap: 20px;
  row-gap: 15px;
  grid-template-columns: repeat(2, 1fr);
}

.contact form .textbox input {
  width: 100%;
  font-size: inherit;
  font-family: inherit;
  padding-block: 12px;
  border: none;
  outline: none;
}

.contact form button {
  background: var(--dark-gold-clr);
  color: var(--black-clr);
  width: max-content;
}

.contact .radios {
  display: flex;
  gap: 20px;
  margin-top: 10px;
}

.contact .check {
  margin-bottom: 20px;
}

.contact .radios label {
  display: flex;
  gap: 10px;
  align-items: center;
}

.contact .radios span {
  width: 22px;
  height: 22px;
  border-radius: 4px;
  background: white;
  border: 1px solid #919191;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.contact .radios span::before {
  content: "";
  position: absolute;
  width: 14px;
  height: 14px;
  border-radius: 2px;
  background: #919191;
  display: none;
}

.contact .radios input:checked + span::before {
  display: block;
}

footer {
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  background: var(--black-clr);
}

@media screen and (max-width: 600px) {
  button {
    font-size: 16px;
  }

  h2 {
    font-size: 26px;
  }

  h3 {
    font-size: 20px;
  }

  p {
    font-size: 16px;
    line-height: 20px;
  }

  .hero {
    text-align: center;
    height: 650px;
    padding-top: 8vh;
    background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg-sm.jpg");
  }

  .showcase {
    border-radius: var(--radius-md);
    top: -20px;
    padding-block: 6vw;
  }

  .showcase .toggler {
    gap: 10px;
    justify-content: start;
  }

  .showcase .toggler span {
    padding: 8px 16px;
    font-size: 14px;
    text-align: center;
    display: flex;
    width: 100%;
  }

  .luxury {
    margin-top: 20px;
    flex-direction: column;
    gap: 0px;
  }

  .luxury-img {
    flex-basis: 100%;
    width: 100%;
    height: 350px;
    background: black;
    margin-bottom: 20px;
  }

  .luxury-img iframe {
    height: 200px;
  }

  .luxury-text {
    flex-basis: 100%;
  }

  .luxury-features .features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }

  .luxury-carousel {
    width: 100%;
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    gap: 10px;
  }

  .luxury-carousel .item {
    flex: 0 0 90%;
    scroll-snap-align: center;
  }

  .faq-box {
    border-radius: var(--radius-md);
  }

  .contact form .inputs {
    display: block;
  }

  .contact form button {
    width: 100%;
  }
}

    </style>
  </head>