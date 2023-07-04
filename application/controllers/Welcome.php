<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

use Orm\Post;
use Orm\User;


class Welcome extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    private $_blade;

    // create construct
    public function __construct()
    {
        parent::__construct();
        $this->_blade = new Blade(VIEWPATH, APPPATH . 'cache');
    }

    private function _createView($view, $data)
    {
        echo $this->_blade->make($view, $data)->render();
    }

    public function index()
    {
        $avail_user = User::all();
        $this->_createView('form',['avail_user' => $avail_user]);
    }

    public function simpan()
    {
        $user_id = $this->input->post('username');
        $artikel = $this->input->post('artikel');

       

        $post = new Post();
        $post->user_id = $user_id;
        $post->artikel = $artikel;
        $post->save();

        redirect('Welcome/tampil');
    }

    public function hapus($id)
    {
        $post = Post::find($id);
        $post->delete();

        redirect('Welcome/tampil');
    }

    public function ubah($id)
    {
        $avail_user = User::all();
        $post = Post::find($id);
        $this->_createView('update', ['post' => $post,'avail_user' =>$avail_user]);
    }

    public function update($id){
        $post = Post::find($id);
        $post->user_id = $this->input->post('username');
        $post->artikel = $this->input->post('artikel');
        $post->save();

        redirect('Welcome/tampil');
    }

    public function tampil()
    {
        $post_list = Post::all();
        $this->_createView('tampil', ['post_list' => $post_list]);
    }
}
