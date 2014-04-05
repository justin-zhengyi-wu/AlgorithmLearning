/**
 * 
 */
package justin.util;


/**
 * @author Justin Wu
 * 
 */
public interface List<T> extends Collection<T> {
    T get(int i);

    T set(int i, T t);

    ListIterator<T> listIterator(int pos);
}
