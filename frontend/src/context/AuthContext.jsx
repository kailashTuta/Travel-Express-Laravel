import { createContext, useContext, useState } from 'react';
import api from '../api/client';
const AuthContext = createContext();
export function AuthProvider({ children }) { const [user, setUser] = useState(JSON.parse(localStorage.getItem('user') || 'null')); const save = (data) => { localStorage.setItem('token', data.token); localStorage.setItem('user', JSON.stringify(data.user)); setUser(data.user); }; const logout = async () => { try { await api.post('/auth/logout'); } finally { localStorage.clear(); setUser(null); } }; return <AuthContext.Provider value={{ user, save, logout }}>{children}</AuthContext.Provider>; }
export const useAuth = () => useContext(AuthContext);
