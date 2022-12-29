
package persistencia;

import org.hibernate.*;
import java.util.*;
import entidades.Categoria;

public class ServiciosCategoria {
    Session sesion;

    public ServiciosCategoria() {
        sesion = ProductosHibernateUtil.getSessionFactory().openSession();
    }
    
    public int addCategoria(Categoria c) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.save(c);
        tx.commit();
        sesion.flush();
        return c.getId();
    }
    
    public void upCategoria(Categoria c) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.update(c);
        tx.commit();
    }
    
    public void delCategoria(Categoria c) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.delete(c);
        tx.commit();
    }
    
    public List<Categoria> getAllCategoria() throws Exception {
        Query q = sesion.createQuery("from Categoria");
        return q.list();
    }
}

