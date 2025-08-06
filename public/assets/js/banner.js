
document.addEventListener("DOMContentLoaded", function () {
  const scene = document.getElementById('banner-scene');
  const banner = document.getElementById('banner');
  const stars = [];

  for (let i = 0; i < 150; i++) {
    const star = document.createElement('div');
    star.className = 'star';
    star.style.width = star.style.height = (Math.random() * 2 + 1) + 'px';
    star.style.top = Math.random() * banner.offsetHeight + 'px';
    star.style.left = Math.random() * banner.offsetWidth + 'px';
    star.dataset.vx = -0.2 - Math.random();
    scene.appendChild(star);
    stars.push(star);
  }

  const ship = document.createElement('div');
  ship.className = 'shippy';
  ship.style.left = '150px';
  ship.style.top = '120px';
  scene.appendChild(ship);

  let shipX = 150, shipY = 120;
  let targetX = 400, targetY = 180;

  function createCloud() {
    const cloud = document.createElement('div');
    cloud.className = 'cloud';
    const size = Math.random() * 60;
    cloud.style.width = size + 'px';
    cloud.style.height = size + 'px';
    cloud.style.left = shipX + 'px';
    cloud.style.top = (shipY + (Math.random() * 20 - 10)) + 'px';
    cloud.style.opacity = Math.random() * 0.5;
    cloud.dataset.vx = -0.5 - Math.random(); // desplazamiento hacia la izquierda
    scene.appendChild(cloud);

    animateCloud(cloud);
  }

  function animateCloud(cloud) {
    let posX = parseFloat(cloud.style.left);
    const vx = parseFloat(cloud.dataset.vx);

    function step() {
      posX += vx;
      cloud.style.left = posX + 'px';

      if (posX + parseFloat(cloud.style.width) > 0) {
        requestAnimationFrame(step);
      } else {
        cloud.remove();
      }
    }

    requestAnimationFrame(step);
  }

  function update() {
    stars.forEach((star) => {
      let x = parseFloat(star.style.left);
      const vx = parseFloat(star.dataset.vx);
      x += vx;
      if (x < 0) x = banner.offsetWidth;
      star.style.left = x + 'px';
    });

    const dx = targetX - shipX;
    const dy = targetY - shipY;
    shipX += dx * 0.02;
    shipY += dy * 0.02;
    ship.style.left = shipX + 'px';
    ship.style.top = shipY + 'px';

    if (Math.random() > 0.7) createCloud();
  }

  setInterval(update, 30);

  banner.addEventListener('mousemove', function (e) {
    const rect = banner.getBoundingClientRect();
    targetX = e.clientX - rect.left - 130;
    targetY = e.clientY - rect.top - 120;
  });

  banner.addEventListener('mouseleave', function () {
    targetX = 400;
    targetY = 180;
  });
});
