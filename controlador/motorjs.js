/*
 * Copyright (C) 2016 Antonio Horrillo Horrillo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

////////////////////////////////////////////////////////////////////////////////
// Funciones Javascript enlaces a funciones PHP mediante Xajax
////////////////////////////////////////////////////////////////////////////////

/**
 * Función en jQuery que actualiza los estados de los pines GPIO al recargar la
 * página.
 */
$( document ).ready(function() {
    
    xajax.request({xjxfun:"controlazul"}, {mode:'synchronous'});
    xajax.request({xjxfun:"controlverde"}, {mode:'synchronous'});
    xajax.request({xjxfun:"controlrojo"}, {mode:'synchronous'});
    xajax.request({xjxfun:"controlamarillo"}, {mode:'synchronous'});
    xajax.request({xjxfun:"controlDht11"}, {mode:'synchronous'});
});
