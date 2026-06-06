(function () {
  const panel = document.querySelector('.configurator-panel');
  const canvas = document.querySelector('.configurator-page [data-vgh-three]');
  if (!panel || !canvas) return;

  const widthInput = panel.querySelector('[data-config="width"]');
  const depthInput = panel.querySelector('[data-config="depth"]');
  const colorInput = panel.querySelector('[data-config="wood"]');
  const backwallInput = panel.querySelector('[data-config="backwall"]');
  const lightsInput = panel.querySelector('[data-config="lights"]');
  const controls = [widthInput, depthInput, colorInput, backwallInput, lightsInput].filter(Boolean);

  function getState() {
    return {
      width: Number(widthInput.value) * 100,
      depth: Number(depthInput.value) * 100,
      color: colorInput.value,
      backwall: backwallInput.checked,
      lights: lightsInput.checked,
    };
  }

  function render() {
    if (canvas && canvas.vghThree) {
      canvas.vghThree.update(getState());
    }
  }

  controls.forEach((control) => {
    control.addEventListener('input', render);
    control.addEventListener('change', render);
  });

  const waitForThree = setInterval(() => {
    if (canvas && canvas.vghThree) {
      clearInterval(waitForThree);
      render();
    }
  }, 150);
})();
