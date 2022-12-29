package persistencia;

import org.hibernate.*;
import java.util.*;
import entidades.Venta;

public class ServiciosVenta {

    Session sesion;

    public ServiciosVenta() {
        sesion = ProductosHibernateUtil.getSessionFactory().openSession();
    }

    public int addVenta(Venta v) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.save(v);
        tx.commit();
        sesion.flush();
        return v.getId();
    }

    public void upLog(Venta v) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.update(v);
        tx.commit();
    }

    public void delVenta(Venta v) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.delete(v);
        tx.commit();
    }

    public List<Venta> getAllVenta() throws Exception {
        Query q = sesion.createQuery("from Venta");
        return q.list();
    }
}

