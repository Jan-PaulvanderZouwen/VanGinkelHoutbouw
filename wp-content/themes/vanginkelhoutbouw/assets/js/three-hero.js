(function () {
  const canvases = document.querySelectorAll('[data-vgh-three]');
  if (!canvases.length) return;

  const colors = {
    oak: 0x9a6f43,
    dark: 0x4b3324,
    natural: 0xb88a58,
  };

  function loadThree() {
    return import('https://unpkg.com/three@0.165.0/build/three.module.js');
  }

  function createVeranda(THREE, scene, config) {
    const group = new THREE.Group();
    scene.add(group);

    const wood = new THREE.MeshStandardMaterial({ color: colors[config.color || 'oak'], roughness: 0.72, metalness: 0.02 });
    const roof = new THREE.MeshStandardMaterial({ color: 0x2b2d29, roughness: 0.65 });
    const glass = new THREE.MeshPhysicalMaterial({ color: 0xdfe7e4, transparent: true, opacity: 0.34, roughness: 0.1, metalness: 0 });
    const warm = new THREE.MeshStandardMaterial({ color: 0xffd89b, emissive: 0xffc477, emissiveIntensity: config.lights ? 0.8 : 0 });

    const width = (config.width || 600) / 100;
    const depth = (config.depth || 350) / 100;
    const height = 2.75;
    const post = 0.16;

    const positions = [
      [-width / 2, height / 2, -depth / 2],
      [width / 2, height / 2, -depth / 2],
      [-width / 2, height / 2, depth / 2],
      [width / 2, height / 2, depth / 2],
    ];

    positions.forEach(([x, y, z]) => {
      const postMesh = new THREE.Mesh(new THREE.BoxGeometry(post, height, post), wood);
      postMesh.position.set(x, y, z);
      postMesh.castShadow = true;
      group.add(postMesh);
    });

    const beamSize = 0.18;
    [
      { size: [width + post, beamSize, beamSize], pos: [0, height, -depth / 2] },
      { size: [width + post, beamSize, beamSize], pos: [0, height, depth / 2] },
      { size: [beamSize, beamSize, depth + post], pos: [-width / 2, height, 0] },
      { size: [beamSize, beamSize, depth + post], pos: [width / 2, height, 0] },
    ].forEach((item) => {
      const beam = new THREE.Mesh(new THREE.BoxGeometry(...item.size), wood);
      beam.position.set(...item.pos);
      beam.castShadow = true;
      group.add(beam);
    });

    const roofMesh = new THREE.Mesh(new THREE.BoxGeometry(width + 0.45, 0.16, depth + 0.55), roof);
    roofMesh.position.set(0, height + 0.18, 0);
    roofMesh.castShadow = true;
    group.add(roofMesh);

    const floor = new THREE.Mesh(new THREE.BoxGeometry(width + 0.8, 0.06, depth + 0.8), new THREE.MeshStandardMaterial({ color: 0xded7c8, roughness: 0.9 }));
    floor.position.set(0, -0.03, 0);
    floor.receiveShadow = true;
    group.add(floor);

    if (config.backwall !== false) {
      const wall = new THREE.Mesh(new THREE.BoxGeometry(width, 1.7, 0.06), glass);
      wall.position.set(0, 1.05, -depth / 2 + 0.03);
      group.add(wall);
    }

    if (config.lights) {
      [-width / 4, 0, width / 4].forEach((x) => {
        const light = new THREE.Mesh(new THREE.SphereGeometry(0.07, 24, 16), warm);
        light.position.set(x, height - 0.14, 0);
        group.add(light);
        const point = new THREE.PointLight(0xffd89b, 0.55, 5);
        point.position.copy(light.position);
        group.add(point);
      });
    }

    return group;
  }

  function initCanvas(THREE, element) {
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0xf2eee4);

    const camera = new THREE.PerspectiveCamera(38, 1, 0.1, 100);
    camera.position.set(5.5, 3.4, 6);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: false });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.8));
    renderer.shadowMap.enabled = true;
    element.innerHTML = '';
    element.appendChild(renderer.domElement);

    scene.add(new THREE.HemisphereLight(0xfff7e8, 0x384238, 2.2));
    const sun = new THREE.DirectionalLight(0xffffff, 2.4);
    sun.position.set(3, 7, 4);
    sun.castShadow = true;
    scene.add(sun);

    let config = { width: 600, depth: 350, color: 'oak', backwall: true, lights: false };
    let veranda = createVeranda(THREE, scene, config);

    const ground = new THREE.Mesh(new THREE.PlaneGeometry(18, 18), new THREE.ShadowMaterial({ opacity: 0.12 }));
    ground.rotation.x = -Math.PI / 2;
    ground.receiveShadow = true;
    scene.add(ground);

    const state = { dragging: false, lastX: 0, rotation: -0.25 };

    element.addEventListener('pointerdown', (event) => {
      state.dragging = true;
      state.lastX = event.clientX;
      element.setPointerCapture(event.pointerId);
    });
    element.addEventListener('pointermove', (event) => {
      if (!state.dragging) return;
      const delta = event.clientX - state.lastX;
      state.lastX = event.clientX;
      state.rotation += delta * 0.006;
    });
    element.addEventListener('pointerup', () => { state.dragging = false; });

    function resize() {
      const rect = element.getBoundingClientRect();
      const width = Math.max(rect.width, 320);
      const height = Math.max(rect.height, 320);
      renderer.setSize(width, height, false);
      camera.aspect = width / height;
      camera.updateProjectionMatrix();
    }

    function update(nextConfig) {
      config = { ...config, ...nextConfig };
      scene.remove(veranda);
      veranda = createVeranda(THREE, scene, config);
    }

    function animate() {
      requestAnimationFrame(animate);
      if (!state.dragging) state.rotation += 0.0022;
      veranda.rotation.y = state.rotation;
      renderer.render(scene, camera);
    }

    window.addEventListener('resize', resize, { passive: true });
    resize();
    animate();

    element.vghThree = { update };
  }

  loadThree().then((THREE) => {
    canvases.forEach((element) => initCanvas(THREE, element));
  }).catch(() => {
    canvases.forEach((element) => {
      element.innerHTML = '<div class="form-placeholder">3D-weergave kon niet worden geladen.</div>';
    });
  });
})();
