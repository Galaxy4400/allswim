import { spawn } from 'child_process';

export const styles = (done) => {
  const src = app.path.src.css;
  const out = `${app.path.build.css}tailwind.min.css`;
  const args = ['tailwindcss', '-i', src, '-o', out];

  if (app.isBuild) args.push('--minify');

  const tw = spawn('npx', args, { shell: true, stdio: 'inherit' });
  tw.on('close', done);
};
