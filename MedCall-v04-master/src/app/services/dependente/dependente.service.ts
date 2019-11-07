import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Dependentes } from 'src/app/model/dependente';


@Injectable({
  providedIn: 'root'
})
export class DependentesService {// API path
  base_path = 'http://localhost/medcall/depen/';

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
   * addDependente(Dependente) - Método responsável por inserir Dependentes no banco
   */
  public addDependente(dependente: Dependentes): Observable<Dependentes> {
    return this.http
      .post<Dependentes>(this.base_path, JSON.stringify(dependente), this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * selectDependenteById(id) - Método responsável por buscar um dependente pelo id
   */
  public selectDependenteById(id: number): Observable<Dependentes> {
    return this.http
      .get<Dependentes>(this.base_path + '?id=' + id)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * selectDependenteById(id) - Método responsável por buscar um dependente pelo id
   */
  public selectDependentes(): Observable<Dependentes> {
    return this.http
      .get<Dependentes>(this.base_path)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * updateDependentes(Dependentes) - Método responsável por atualizar um Dependentes
   */
  public updateDependentes(dependente: Dependentes): Observable<Dependentes> {
    return this.http
      .put<Dependentes>(this.base_path + '?id=' + dependente.id_dependente, JSON.stringify(dependente), this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * deleteDependentes(id_dependente) - Método responsável por excluir um dependente
   */
  public deleteDependentes(id_dependente: number) {
    return this.http
      .delete<Dependentes>(this.base_path + '?id=' + id_dependente, this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

}