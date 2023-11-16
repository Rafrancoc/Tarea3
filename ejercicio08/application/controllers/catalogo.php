<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Catalogo extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('catalogo_model');
    }
    
    function index()
    {
        $data['title'] = 'Catálogo';
        $pages = 6; //Número de registros mostrados por páginas
        $this->load->library('pagination'); //Cargamos la librería de paginación
        $config['base_url'] = base_url('catalogo/pagina'); // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
        $config['total_rows'] = $this->catalogo_model->filas();
        $config['per_page'] = $pages;
        $config['num_links'] = 20; //Número de links mostrados en la paginación
        $config['first_link'] = 'Primera';
        $config['last_link'] = 'Última';
        $config['next_link'] = 'Siguiente';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div id="paginacion">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data["productos"] = $this->catalogo_model->total_productos_paginados($config['per_page'], $this->uri->segment(3));
        $this->load->view('catalogo_view', $data);
    }
  
    function agregarProducto()
    {
        $id = $this->input->post('id');
        $producto = $this->catalogo_model->porId($id);
        $cantidad = 1;
        $carrito = $this->cart->contents();
        $rowid='';
        foreach ($carrito as $clave => $item) {
            if ($item['id'] == $id) {
                $cantidad = 1 + $item['qty'];
                $rowid=$clave;
            }
        }
        if($cantidad==1){
            $data = array(
                'id' => $id,
                'qty' => $cantidad,
                'price' => $producto->precio,
                'name' => $producto->nombre
            );
        }else {
            $data = array(
                'rowid' => $rowid,
                'qty'   => $cantidad
            );
        }
        if($cantidad>1){
            $this->cart->update($data);
        }
        else{
            $this->cart->insert($data);
        }
        $uri = $this->input->post('uri');
        $this->session->set_flashdata('agregado', 'El producto fue agregado correctamente');
        redirect('catalogo'.$uri, 'refresh');
    }
    
    function eliminarProducto($rowid) 
    {
        $producto = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($producto);
        $this->session->set_flashdata('productoEliminado', 'El producto fue eliminado correctamente');
        redirect('catalogo', 'refresh');
    }
    
    function eliminarCarrito() {
        $this->cart->destroy();
        $this->session->set_flashdata('destruido', 'El carrito fue eliminado correctamente');
        redirect('catalogo', 'refresh');
    }
}