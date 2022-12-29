package persistencia;

import org.hibernate.*;
import java.util.*;
import entidades.Detalle_Venta;

public class ServiciosDetalle_Venta {
    Session sesion;
    
    public ServiciosDetalle_Venta() {
        sesion = ProductosHibernateUtil.getSessionFactory().openSession();
    }
    
    public int addDetalle_Venta(Detalle_Venta d_v) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.save(d_v);
        tx.commit();
        sesion.flush();
        return d_v.getId();
    }
    
    public void upDetalle_Venta(Detalle_Venta d_v) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.update(d_v);
        tx.commit();
    }
    
    public void delDetalle_Venta(Detalle_Venta d_v) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.delete(d_v);
        tx.commit();
    }
    
    public List<Detalle_Venta> getAllDetalle_Venta() throws Exception {
        Query q = sesion.createQuery("from Detalle_Venta");
        return q.list();
    }
}
    

