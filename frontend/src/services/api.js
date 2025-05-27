const API_BASE_URL = 'http://127.0.0.1/api';

export default {
  // GET-запрос (получение данных)
  async get(endpoint, params = {}) {
    try {
      const url = new URL(`${API_BASE_URL}/${endpoint}`);
      Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

      const response = await fetch(url, {
        method: 'GET',
        headers: { 'Accept': 'application/json' },
        credentials: 'include', 
      });

      return await response.json();
    } catch (error) {
      console.error('GET Error:', error);
      throw error;
    }
  },

  // POST-запрос (отправка данных)
  async post(endpoint, data = {}) {
    try {
      const response = await fetch(`${API_BASE_URL}/${endpoint}`, {
        method: 'POST',
        headers: { 
          'Content-Type': 'application/json',
          'Accept': 'application/json',
        },
        body: JSON.stringify(data),
        credentials: 'include',
      });

      return await response.json();
    } catch (error) {
      console.error('POST Error:', error);
      throw error;
    }
  },

  // PUT/PATCH-запрос (обновление данных)
  async update(endpoint, data = {}, method = 'PUT') {
    try {
      const response = await fetch(`${API_BASE_URL}/${endpoint}`, {
        method: method, // 'PUT' или 'PATCH'
        headers: { 
          'Content-Type': 'application/json',
          'Accept': 'application/json',
        },
        body: JSON.stringify(data),
        credentials: 'include',
      });

      return await response.json();
    } catch (error) {
      console.error('UPDATE Error:', error);
      throw error;
    }
  },

  // DELETE-запрос (удаление данных)
  async delete(endpoint) {
    try {
      const response = await fetch(`${API_BASE_URL}/${endpoint}`, {
        method: 'DELETE',
        headers: { 'Accept': 'application/json' },
        credentials: 'include',
      });

      return await response.json();
    } catch (error) {
      console.error('DELETE Error:', error);
      throw error;
    }
  },
};