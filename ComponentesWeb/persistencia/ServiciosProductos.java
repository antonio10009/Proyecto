package persistencia;

import org.hibernate.*;
import java.util.*;
import entidades.Producto;

public class ServiciosProductos {
    Session sesion;

    public ServiciosProductos() {
        sesion = ProductosHibernateUtil.getSessionFactory().openSession();
    }
    
    public int addProducto(Producto p) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.save(p);
        tx.commit();
        sesion.flush();
        return p.getId();
    }
    
    public void upProducto(Producto p) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.update(p);
        tx.commit();
    }
    
    public void delProducto(Producto p) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.delete(p);
        tx.commit();
    }
    
    public List<Producto> getAllProducto() throws Exception {
        Query q = sesion.createQuery("from Producto");
        return q.list();
        }
    }

