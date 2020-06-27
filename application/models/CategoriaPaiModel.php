
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class CategoriaPaiModel extends CI_Model
{

    public function listar_categoriaspai_com_id($id)
    {
        //retorna os dados do cliente

        $this->db->where('id', $id);

        $this->db->limit(1);
        $query =  $this->db->get('categorias_pais');
        return $query->row();

        // return $this->db->from('categoriaspai')->where('id', $id)->get()->result_array();
    }

    public function listarCategoriaspai()
    {
        $this->db->from('categorias_pais');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function listarCategoriaspailinha()
    {
        $this->db->from('categorias_pais');
        $this->db->order_by('nome', 'asc');
        return $this->db->get()->result();
    }

    public function nomeCatPai($id = null)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            $query = $this->db->get('categorias_pais')->row();
            return $query->nome;
        }
    }



    public function salvar()
    {

        foreach (array_keys($_POST) as $chave) {
            eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
        }

        return $this->db->insert('categorias_pais', $this);
    }

    public function excluir($id)
    {
        $this->db->delete('categorias_pais', "id = $id");
        setMsg('msgCadastro', 'Categoria deletada com sucesso', 'erro');
    }


    public function atualizar($id)
    {

        foreach (array_keys($_POST) as $chave) {
            eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
        }

        return $this->db->update('categorias_pais', $this, "id = $id");
        setMsg('msgCadastro', 'Categoria Atualizada com sucesso', 'sucesso');
    }
}
