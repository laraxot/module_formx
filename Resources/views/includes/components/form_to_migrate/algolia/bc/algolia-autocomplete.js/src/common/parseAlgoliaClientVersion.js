<<<<<<< HEAD
'use strict';
module.exports = function parseAlgoliaClientVersion(agent) {
  var parsed = agent.match(/Algolia for vanilla JavaScript (\d+\.)(\d+\.)(\d+)/);
  if (parsed) return [parsed[1], parsed[2], parsed[3]];
  return undefined;
};
=======
'use strict';
module.exports = function parseAlgoliaClientVersion(agent) {
  var parsed = agent.match(/Algolia for vanilla JavaScript (\d+\.)(\d+\.)(\d+)/);
  if (parsed) return [parsed[1], parsed[2], parsed[3]];
  return undefined;
};
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
