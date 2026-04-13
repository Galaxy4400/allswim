import { deleteAsync } from 'del';

export const resetcss = () => deleteAsync(app.path.cleanCss);
