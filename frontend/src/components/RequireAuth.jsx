import { Navigate, Outlet } from 'react-router-dom'; import { useAuth } from '../context/AuthContext';
export function RequireAuth({ admin=false }) { const { user }=useAuth(); return !user ? <Navigate to="/login" replace/> : admin && user.role_as !== 'admin' ? <Navigate to="/" replace/> : <Outlet/>; }
