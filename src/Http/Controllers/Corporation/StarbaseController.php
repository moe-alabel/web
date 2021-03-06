<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015, 2016, 2017  Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace Seat\Web\Http\Controllers\Corporation;

use Seat\Services\Repositories\Corporation\Assets;
use Seat\Services\Repositories\Corporation\Starbases;
use Seat\Services\Repositories\Eve\EveRepository;
use Seat\Web\Http\Controllers\Controller;
use Seat\Web\Http\Validation\StarbaseModule;

class StarbaseController extends Controller
{
    use Assets;
    use EveRepository;
    use Starbases;

    /**
     * @param $corporation_id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getStarbases(int $corporation_id)
    {

        // The basic strategy here is that we will first try and get
        // as much information as possible about the starbases.
        // After that we will take the list of starbases and
        // attempt to determine the fuel usage as well as
        // the tower name as per the assets list.
        $starbases = $this->getCorporationStarbases($corporation_id);
        $starbase_states = $this->getEveStarbaseTowerStates();

        return view('web::corporation.starbases',
            compact('starbases', 'starbase_states'));
    }

    /**
     * @param \Seat\Web\Http\Validation\StarbaseModule $request
     * @param                                          $corporation_id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postStarbaseModules(StarbaseModule $request, int $corporation_id)
    {

        $starbase = $this->getCorporationStarbases($corporation_id, $request->starbase_id);
        $module_contents = $this->getCorporationAssetContents($corporation_id);

        return view('web::corporation.starbase.ajax.modules-tab',
            compact('starbase', 'module_contents'));

    }
}
