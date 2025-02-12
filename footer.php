
<footer>Copyright © 2025 Makarios Luxury</footer>

<script>
  AOS.init({
    duration: 800,
  });
</script>

<script>
    const luxuryToggle = document.querySelector("#luxuryToggle");
const championToggle = document.querySelector("#championToggle");

const luxuryContainer = document.querySelector(".luxury-container");
const championContainer = document.querySelector(".champion-container");

championToggle.onclick = () => {
  luxuryContainer.style.display = "none";
  championContainer.style.display = "block";
};

luxuryToggle.onclick = () => {
  luxuryContainer.style.display = "block";
  championContainer.style.display = "none";
};

</script>
</body>
</html>
