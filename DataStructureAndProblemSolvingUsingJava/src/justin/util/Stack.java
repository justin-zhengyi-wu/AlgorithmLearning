/**
 * 
 */
package justin.util;

/**
 * @author Justin Wu
 * 
 */
public interface Stack<T> {
    void push(T t);

    void pop();

    T top();

    T topAndPop();

    boolean isEmpty();

    void makeEmpty();
}
