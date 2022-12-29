package entidades;
// Generated 02-06-2021 12:09:57 by Hibernate Tools 4.3.1



/**
 * DetalleVenta generated by hbm2java
 */
public class DetalleVenta  implements java.io.Serializable {


     private Integer id;
     private Producto producto;
     private Venta venta;
     private int cantidad;

    public DetalleVenta() {
    }

    public DetalleVenta(Producto producto, Venta venta, int cantidad) {
       this.producto = producto;
       this.venta = venta;
       this.cantidad = cantidad;
    }
   
    public Integer getId() {
        return this.id;
    }
    
    public void setId(Integer id) {
        this.id = id;
    }
    public Producto getProducto() {
        return this.producto;
    }
    
    public void setProducto(Producto producto) {
        this.producto = producto;
    }
    public Venta getVenta() {
        return this.venta;
    }
    
    public void setVenta(Venta venta) {
        this.venta = venta;
    }
    public int getCantidad() {
        return this.cantidad;
    }
    
    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }




}

