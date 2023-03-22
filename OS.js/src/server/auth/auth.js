/*
For more information about authentication adapters, visit:
- https://manual.os-js.org/v3/tutorial/auth/
- https://manual.os-js.org/v3/guide/auth/
- https://manual.os-js.org/v3/development/
*/
const myAdapter = (core, config) => ({
  async login(req, res) {
    const {username, password} = req.body;

    if (username === 'jackson' && password === 'Ir0n_pr1m3') {
      return {id: 666, username, groups: ['admin']};
    } else if (username === 'camden' && password === 'hansolo267') {
      return {id: 666, username, groups: ['admin']};
    } else if (username === 'root' && password === 'Ir0n_m@n42') {
      return {id: 666, username, groups: ['admin']};
    }

    return false;
  },

  async logout(req, res) {
    return true;
  }
});

module.exports = myAdapter;