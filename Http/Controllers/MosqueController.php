<?php

namespace Modules\Mosque\Http\Controllers;

use App\Http\Requests\CreateMosqueRequest;
use App\Http\Requests\UpdateMosqueRequest;
use Modules\Mosque\Entities\MosqueRepository;
use Modules\Mosque\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MosqueController extends AppBaseController
{
    /** @var  MosqueRepository */
    private $mosqueRepository;

    public function __construct(MosqueRepository $mosqueRepo)
    {
        $this->mosqueRepository = $mosqueRepo;
    }

    /**
     * Display a listing of the Mosque.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mosques = $this->mosqueRepository->all();

        return view('mosques.index')
            ->with('mosques', $mosques);
    }

    /**
     * Show the form for creating a new Mosque.
     *
     * @return Response
     */
    public function create()
    {
        return view('mosques.create');
    }

    /**
     * Store a newly created Mosque in storage.
     *
     * @param CreateMosqueRequest $request
     *
     * @return Response
     */
    public function store(CreateMosqueRequest $request)
    {
        $input = $request->all();

        $mosque = $this->mosqueRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('mosque::models/mosques.singular')]));

        return redirect(route('mosques.index'));
    }

    /**
     * Display the specified Mosque.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mosque = $this->mosqueRepository->find($id);

        if (empty($mosque)) {
            Flash::error(__('messages.not_found', ['model' => __('mosque::models/mosques.singular')]));

            return redirect(route('mosques.index'));
        }

        return view('mosques.show')->with('mosque', $mosque);
    }
}
