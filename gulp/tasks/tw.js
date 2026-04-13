import { spawn } from 'child_process';

export const tailwind = (done) => {
  const src = app.path.src.css;
  const outNormal = app.path.build.css + 'tailwind.css';
  const outMin = app.path.build.css + 'tailwind.min.css';

  // Если DEV: собираем только min-файл
  if (app.isDev) {
    const tw = spawn('npx', ['tailwindcss', '-i', src, '-o', outMin, '--minify'], {
      shell: true,
      stdio: 'inherit',
    });

    tw.on('close', done);
    return;
  }

  // Если BUILD: собираем normal + min (как раньше)
  const normal = spawn('npx', ['tailwindcss', '-i', src, '-o', outNormal], {
    shell: true,
    stdio: 'inherit',
  });

  normal.on('close', () => {
    const minified = spawn('npx', ['tailwindcss', '-i', src, '-o', outMin, '--minify'], {
      shell: true,
      stdio: 'inherit',
    });

    minified.on('close', () => done());
  });
};
