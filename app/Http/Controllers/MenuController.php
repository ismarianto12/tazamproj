<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Helpers\Aplikasi;
use DataTables;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $request;
    protected $route;
    protected $view;
    function __construct(Request $request)
    {
        $this->request = $request;
        $this->view    = '.menu.';
        $this->route   = 'master.menu.';
    }

    public function index()
    {
        $title = 'Settting route menu dan hak akses';
        return view($this->view . 'index', compact('title'));
    }

    public function api()
    {
        $data = Menu::with(['user'])->get();
        $parents = Menu::select(
            'route',
            'icon',
            'user_role',
            'user_id',
            'updated_at',
            'created_at',
            'parent',
            'child',
        )->where([
            'parent' => 1,
            'child' => 0
        ]);

        $childs = Menu::select(
            'route',
            'icon',
            'user_role',
            'user_id',
            'updated_at',
            'created_at',
            'parent',
            'child',
        )->where(
            ['child' => 1],
            ['parent' => 1]
        );

        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('user_role', function ($p) use ($parents) {
                if ($p != '') {
                    $exp = explode('.', $p->user_role);
                } else {
                    $exp = '';
                }
                foreach ($exp as $ls) {
                    $array[] = $ls[0] . ',';
                }
                $nilai  = $array;
                return $nilai;
            })
            ->editColumn('parent', function ($p) use ($parents) {
                $nilai = $parents::get();
                return $nilai;
            })
            ->editColumn('child',  function ($p) use ($childs) {
                $child = $childs::where('parent', $p->parent)->get();
                $html = '<div class="p-4">';
                foreach ($child as $childs) {
                    $html .= '<div class="activity-item activity-primary">
    <div class="activity-content">
        <small class="text-muted">
            <i class="icon icon-user position-left"></i> 5 mins ago
        </small>
        <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
    </div>
</div> ';
                }
                $html = '</div>';

                return $html;
            })
            ->editColumn('usercreate', function ($p) {
                $nilai = ($p->User->username) ? $p->User->username : 'Kosong';
                return $nilai;
            })
            ->editColumn('action', function ($p) {
                return  '<a href="" class="btn btn-primary btn-xs" id="edit" data-id="' . $p->id . '">Edit </a> <a href=""  class="btn btn-info btn-xs" id="delete"  data-id="' . $p->id . '">Detail </a>';
            }, true)
            ->addIndexColumn()
            ->rawColumns([
                'id',
                'user_role',
                'parent',
                'child',
                'usercreate'
            ])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Menu::select(
            'route',
            'icon',
            'user_role',
            'user_id',
            'updated_at',
            'created_at',
            'parent',
            'child',
        )->where([
            'parent' => 1,
            'child' => 0
        ])->get();
        $title = 'Data menu';
        return view($this->view . 'form_add', compact(
            'parents',
            'title'
        ));
    }

    public function store(Request $request)
    {
        try {
            $r = new Menu;
            $r->route = $this->request->route;
            $r->icon = $this->request->icon;
            $r->user_role = $this->request->user_role;
            $r->user_id = $this->request->user_id;
            $r->updated_at = $this->request->updated_at;
            $r->created_at = $this->request->created_at;
            return Aplikasi::response(1, 'data berhasil disimpan');
        } catch (Menu $th) {
            return Aplikasi::response(1, $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Menu $menu)
    {
        $parents = Menu::select(
            'route',
            'icon',
            'user_role',
            'user_id',
            'updated_at',
            'created_at',
            'parent',
            'child',
        )->where([
            'parent' => 1,
            'child' => 0
        ])->get();
        $data  = $menu::find($id);
        $id = $data->id;
        $route = $data->route;
        $icon = $data->icon;
        $user_role = $data->user_role;
        $user_id = $data->user_id;
        $updated_at = $data->updated_at;
        $created_at = $data->created_at;
        $parent = $data->parent;
        $child = $data->child;

        return view($this->view . 'form_edit', compact(
            'id',
            'parents',
            'route',
            'icon',
            'user_role',
            'user_id',
            'updated_at',
            'created_at',
            'parent',
            'child',

        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Menu $menu)
    {
        try {
            $r = Menu::find($id);
            $r->route = $this->request->route;
            $r->icon = $this->request->icon;
            $r->user_role = $this->request->user_role;
            $r->user_id = $this->request->user_id;
            $r->updated_at = $this->request->updated_at;
            $r->created_at = $this->request->created_at;
            return Aplikasi::response(1, 'data berhasil update');
        } catch (Menu $th) {
            return Aplikasi::response(1, $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        try {
            if (is_array($this->request->id))
                Menu::whereIn('id', $this->request->id)->delete();
            else
                Menu::whereid($this->request->id)->delete();
            return response()->json([
                'status' => 1,
                'msg' => 'Data berhasil di hapus'
            ]);
        } catch (Menu $t) {
            return response()->json([
                'status' => 2,
                'msg' => $t
            ]);
        }
    }
}
