import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Usuario } from '../../model/usuario';

@Injectable({
  providedIn: 'root'
})
export class UsuarioService {// API path
  base_path = 'http://localhost/medcalldb/usuario/';

  constructor(private http: HttpClient) { }

  // Http Options
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }

  // Handle API errors
  private handleError(error: HttpErrorResponse) {
    if (error.error instanceof ErrorEvent) {
      // Ocorreu um erro no cliente ou na rede.
      console.error('Ocorreu um erro:', error.error.message);
    } else {
      // O back-end retornou um código de resposta sem êxito.
      // O corpo da resposta pode conter pistas sobre o que deu errado.
      console.error(
        `Backend returned code ${error.status}, ` +
        `body was: ${error.error}`);
    }
    // return an observable with a user-facing error message
    return throwError(
      'Something bad happened; please try again later.');
  };

  /** C.R.U.D **/

  /**
   * addUsuario(Usuario) - Método responsável por inserir Usesrios no banco
   */
  public addUsuario(usuario: Usuario): Observable<Usuario> {
    return this.http
      .post<Usuario>(this.base_path, JSON.stringify(usuario), this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * selectUsuarioById(id_usuario) - Método responsável por buscar um usuario pelo id
   */
  public selectUsuarioById(id_usuario: number): Observable<Usuario> {
    return this.http
      .get<Usuario>(this.base_path + '?id=' + id_usuario)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * selectUsuarioById(id) - Método responsável por buscar um usuario pelo id
   */
  public selectUsuario(): Observable<Usuario> {
    return this.http
      .get<Usuario>(this.base_path)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * updateUsuario(Usuario) - Método responsável por atualizar um usuario
   */
  public updateUsuario(usuario: Usuario): Observable<Usuario> {
    return this.http
      .put<Usuario>(this.base_path + '?id=' + usuario.id_usuario, JSON.stringify(usuario), this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * deleteUsuario(id) - Método responsável por excluir um Usario 
   */
  public deleteUsuario(id_usuario: number) {
    return this.http
      .delete<Usuario>(this.base_path + '?id=' + id_usuario, this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

}