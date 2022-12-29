
package persistencia;

import org.hibernate.*;
import java.util.*;
import entidades.Log;

public class ServiciosLog {
    Session sesion;
    public ServiciosLog() {
        sesion = ProductosHibernateUtil.getSessionFactory().openSession();
    }
    
    public int addLog(Log l) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.save(l);
        tx.commit();
        sesion.flush();
        return l.getId();
    }
    
    public void upLog(Log l) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.update(l);
        tx.commit();
    }
    
    public void delLog(Log l) throws Exception {
        Transaction tx = sesion.beginTransaction();
        sesion.delete(l);
        tx.commit();
    }
    
    public List<Log> getAllLog() throws Exception {
        Query q = sesion.createQuery("from Log");
        return q.list();
    }
}